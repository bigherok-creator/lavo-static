import http.server
import socketserver

PORT = 0
Handler = http.server.SimpleHTTPRequestHandler

with socketserver.TCPServer(("", PORT), Handler) as httpd:
    port = httpd.server_address[1]
    url = f"http://localhost:{port}"
    print(f"Server started at {url}")
    with open("server_port.txt", "w") as f:
        f.write(url)
    httpd.serve_forever()
