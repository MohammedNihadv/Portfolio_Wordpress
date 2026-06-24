@echo off
echo ==============================================
echo Exporting WordPress site to static HTML...
echo ==============================================
python export.py
if %ERRORLEVEL% neq 0 (
    echo [ERROR] Static site generation failed.
    pause
    exit /b %ERRORLEVEL%
)

echo ==============================================
echo Deploying static files to GitHub Pages...
echo ==============================================
cd dist
if not exist .git (
    git init
    git branch -M gh-pages
    git remote add origin https://github.com/MohammedNihadv/Portfolio_Wordpress.git
)
git add .
git commit -m "Deploy to GitHub Pages"
git push -f origin gh-pages
cd ..

echo ==============================================
echo [SUCCESS] Deployed to GitHub Pages!
echo ==============================================
pause
