import os
import re
import urllib.request
import urllib.parse
from html.parser import HTMLParser

LOCAL_BASE = "http://localhost/wordpress"
REMOTE_BASE = "https://mohammednihadv.github.io/Portfolio_Wordpress"
DIST_DIR = os.path.abspath("dist")

# Ensure dist directory exists
os.makedirs(DIST_DIR, exist_ok=True)

class LinkParser(HTMLParser):
    def __init__(self):
        super().__init__()
        self.links = set()
        self.assets = set()

    def handle_starttag(self, tag, attrs):
        attrs_dict = dict(attrs)
        
        # Hyperlinks
        if tag == 'a' and 'href' in attrs_dict:
            self.links.add(attrs_dict['href'])
            
        # Scripts
        if tag == 'script' and 'src' in attrs_dict:
            self.assets.add(attrs_dict['src'])
            
        # Stylesheets & Favicons & Fonts
        if tag == 'link' and 'href' in attrs_dict:
            self.assets.add(attrs_dict['href'])
                
        # Images, Videos, Audio
        if tag in ['img', 'source', 'iframe', 'embed', 'audio', 'video'] and 'src' in attrs_dict:
            self.assets.add(attrs_dict['src'])
            
        # srcset attribute on img or source
        if 'srcset' in attrs_dict:
            srcset = attrs_dict['srcset']
            for part in srcset.split(','):
                part = part.strip()
                if part:
                    url = part.split(' ')[0]
                    self.assets.add(url)

def is_internal(url):
    return url.startswith(LOCAL_BASE) or url.startswith('/') or (not url.startswith('http') and not url.startswith('//'))

def resolve_url(url, base_url):
    if url.startswith('//'):
        return 'http:' + url
    return urllib.parse.urljoin(base_url, url)

def clean_url(url):
    # Strip hash fragments
    parsed = urllib.parse.urlparse(url)
    return urllib.parse.urlunparse((parsed.scheme, parsed.netloc, parsed.path, '', parsed.query, ''))

def get_local_path(url):
    parsed = urllib.parse.urlparse(url)
    path = parsed.path
    if path.startswith('/wordpress'):
        path = path[len('/wordpress'):]
    
    path = path.lstrip('/')
    if not path:
        return os.path.join(DIST_DIR, "index.html")
        
    _, ext = os.path.splitext(path)
    if not ext:
        # Check if query tells us it's a page (e.g. ?p=123)
        if parsed.query:
            # Try to build a clean name from the query
            query_clean = re.sub(r'[^a-zA-Z0-9-]', '_', parsed.query)
            return os.path.join(DIST_DIR, f"query_{query_clean}", "index.html")
        return os.path.join(DIST_DIR, path, "index.html")
    
    return os.path.join(DIST_DIR, path)

def download_and_save(url, local_path):
    print(f"Downloading: {url} -> {local_path}")
    os.makedirs(os.path.dirname(local_path), exist_ok=True)
    try:
        req = urllib.request.Request(
            url, 
            headers={'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)'}
        )
        with urllib.request.urlopen(req) as response:
            content = response.read()
            with open(local_path, 'wb') as f:
                f.write(content)
            return content
    except Exception as e:
        print(f"Failed to download {url}: {e}")
        return None

def rewrite_file_urls(local_path):
    if not os.path.exists(local_path):
        return
        
    _, ext = os.path.splitext(local_path)
    if ext.lower() not in ['.html', '.css', '.js', '.xml', '.json']:
        return
        
    try:
        with open(local_path, 'r', encoding='utf-8', errors='ignore') as f:
            content = f.read()
            
        # Replace absolute links
        content = content.replace("http://localhost/wordpress", REMOTE_BASE)
        content = content.replace("http:\/\/localhost\/wordpress", REMOTE_BASE.replace("/", "\\/"))
        
        # Replace root-relative links
        content = content.replace('"/wordpress/', f'"{REMOTE_BASE}/')
        content = content.replace("'/wordpress/", f"'{REMOTE_BASE}/")
        
        with open(local_path, 'w', encoding='utf-8') as f:
            f.write(content)
    except Exception as e:
        print(f"Error rewriting URLs in {local_path}: {e}")

def crawl():
    crawled_pages = set()
    downloaded_assets = set()
    
    pages_to_crawl = [LOCAL_BASE + "/"]
    
    # First, crawl HTML pages to find all pages and their asset URLs
    while pages_to_crawl:
        url = pages_to_crawl.pop(0)
        cleaned_url = clean_url(url)
        if cleaned_url in crawled_pages:
            continue
            
        crawled_pages.add(cleaned_url)
        local_path = get_local_path(cleaned_url)
        
        # Fetch the HTML
        content_bytes = download_and_save(url, local_path)
        if not content_bytes:
            continue
            
        content_str = content_bytes.decode('utf-8', errors='ignore')
        
        # Parse links and assets
        parser = LinkParser()
        parser.feed(content_str)
        
        # Filter and queue links
        for link in parser.links:
            resolved = resolve_url(link, url)
            if is_internal(resolved) and clean_url(resolved) not in crawled_pages:
                pages_to_crawl.append(resolved)
                
        # Queue assets
        for asset in parser.assets:
            resolved = resolve_url(asset, url)
            if is_internal(resolved):
                downloaded_assets.add(clean_url(resolved))

    # Next, download all assets
    for asset_url in downloaded_assets:
        local_path = get_local_path(asset_url)
        if os.path.exists(local_path):
            continue
        download_and_save(asset_url, local_path)
        
        # If it's a CSS file, parse for font/image url(...) links
        _, ext = os.path.splitext(local_path)
        if ext.lower() == '.css':
            try:
                with open(local_path, 'r', encoding='utf-8', errors='ignore') as f:
                    css_content = f.read()
                css_urls = re.findall(r'url\([\'"]?([^\'")]+)[\'"]?\)', css_content)
                for css_url in css_urls:
                    if css_url.startswith('data:'):
                        continue
                    resolved_css_url = resolve_url(css_url, asset_url)
                    if is_internal(resolved_css_url):
                        css_asset_path = get_local_path(resolved_css_url)
                        if not os.path.exists(css_asset_path):
                            download_and_save(resolved_css_url, css_asset_path)
            except Exception as e:
                print(f"Error parsing CSS file {local_path}: {e}")

    # Rewrite all URLs in all files to remote URL
    print("Rewriting URLs...")
    for root, dirs, files in os.walk(DIST_DIR):
        for file in files:
            file_path = os.path.join(root, file)
            rewrite_file_urls(file_path)
            
    print("Static site generation completed!")

if __name__ == "__main__":
    crawl()
