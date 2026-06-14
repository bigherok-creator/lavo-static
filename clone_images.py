import urllib.request
import re
import os
from urllib.parse import urljoin, unquote

base_url = "https://lavo.177.jaysoft.dev/lavo-home/index.html"
folder = "."

def download_file(url, filepath):
    try:
        if os.path.exists(filepath):
            return
        print(f"Downloading: {url} -> {filepath}")
        req = urllib.request.Request(url, headers={'User-Agent': 'Mozilla/5.0'})
        with urllib.request.urlopen(req) as response:
            content = response.read()
        with open(filepath, "wb") as f:
            f.write(content)
    except Exception as e:
        print(f"Failed to download {url}: {e}")

# Read local HTML and CSS files to find URLs
files_to_scan = ["index.html", "animations.css", "responsive.css", "style.css"]

assets = set()

# Regex for url('...'), url("..."), url(...)
url_pattern = re.compile(r'url\([\'"]?([^\'"()]+)[\'"]?\)')
# Regex for src="..." or href="..."
src_pattern = re.compile(r'(?:src|href)="([^"]+)"')

for filename in files_to_scan:
    if os.path.exists(filename):
        with open(filename, "r", encoding="utf-8") as f:
            content = f.read()
            urls = url_pattern.findall(content) + src_pattern.findall(content)
            for url in urls:
                if not url.startswith(('http://', 'https://', 'data:', 'mailto:', 'javascript:', '#')):
                    assets.add(url)

for asset in assets:
    # Resolve URL
    asset_url = urljoin(base_url, asset)
    # File path
    asset_path = os.path.join(folder, unquote(asset).split('?')[0])
    asset_dir = os.path.dirname(asset_path)
    if asset_dir and not os.path.exists(asset_dir):
        os.makedirs(asset_dir, exist_ok=True)
    
    download_file(asset_url, asset_path)

print("Done cloning missing assets!")
