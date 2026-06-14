import urllib.request
import re
import os
from urllib.parse import urljoin, urlparse, unquote

base_url = "https://lavo.177.jaysoft.dev/lavo-home/index.html"
folder = "." # We are already in Lavo directory

def download_file(url, filepath):
    try:
        print(f"Downloading: {url} -> {filepath}")
        req = urllib.request.Request(url, headers={'User-Agent': 'Mozilla/5.0'})
        with urllib.request.urlopen(req) as response:
            content = response.read()
        with open(filepath, "wb") as f:
            f.write(content)
    except Exception as e:
        print(f"Failed to download {url}: {e}")

# Get HTML
print(f"Fetching: {base_url}")
req = urllib.request.Request(base_url, headers={'User-Agent': 'Mozilla/5.0'})
try:
    with urllib.request.urlopen(req) as response:
        html = response.read().decode('utf-8')
except Exception as e:
    print(f"Failed to fetch index: {e}")
    exit(1)

with open(os.path.join(folder, "index.html"), "w", encoding="utf-8") as f:
    f.write(html)

# Extract relative URLs
pattern = r'(?:src|href)="([^"]+)"'
links = re.findall(pattern, html)

assets = set()
for link in links:
    if not link.startswith(('http://', 'https://', 'mailto:', 'javascript:', 'data:', '#')):
        assets.add(link)

for asset in assets:
    # Resolve URL
    asset_url = urljoin(base_url, asset)
    # File path
    asset_path = os.path.join(folder, unquote(asset).split('?')[0]) # Remove query params for local save
    asset_dir = os.path.dirname(asset_path)
    if asset_dir and not os.path.exists(asset_dir):
        os.makedirs(asset_dir, exist_ok=True)
    
    download_file(asset_url, asset_path)

print("Done cloning!")
