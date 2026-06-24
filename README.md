# Minimalistic Portfolio WordPress

 WordPress block theme tailored for showcasing developer and designer portfolios. 

This repository contains both the **WordPress Theme source code** and an **automated pipeline to deploy a live static preview** on GitHub Pages.

---

## Live Showcase
Check out the live working preview hosted on GitHub Pages:
 **[https://mohammednihadv.github.io/Portfolio_Wordpress/](https://mohammednihadv.github.io/Portfolio_Wordpress/)**

---

## Repository Structure

* **`main` branch**: Contains the complete WordPress theme source code (PHP templates, block patterns, custom styles, assets).
* **`gh-pages` branch**: Contains the generated static HTML/CSS/JS export of the site served by GitHub Pages.

---

##  How to Install and Run the Theme

1. **Download the Theme**:
   Download this repository as a ZIP file by clicking on the green **Code** button and selecting **Download ZIP**.
2. **Install on WordPress**:
   * Go to WordPress Dashboard (`Appearance` -> `Themes`).
   * Click **Add New Theme** -> **Upload Theme**.
   * Choose the downloaded ZIP file and click **Install Now**.
3. **Activate**:
   * Once installed, click **Activate** to apply the theme to your site.
4. **Site Editor**:
   * As a block theme, can customize all templates and parts by going to `Appearance` -> `Editor`.

---

## Static Site Export & Deployment Pipeline

This repository includes a custom built static exporter to make running a WordPress theme on GitHub Pages possible.

### Key Scripts included:
* **`export.py`**: A custom Python crawler that scrapes the local WordPress site running on XAMPP (`http://localhost/wordpress`), downloads all assets (CSS, JS, images, fonts), cleans query parameters, and rewrites all local links to point to the production GitHub Pages URL.
* **`deploy.bat`**: A single-click Windows batch script that automates running the python exporter and force-pushing the static build folder (`dist/`) directly to the `gh-pages` branch on GitHub.

---

## Theme Details
* **Technology**: WordPress Block Theme (Full Site Editing compatible)
* **Customization**: Supports block patterns, global styles (includes multiple color presets in `styles/` folder), and theme.json customization.
