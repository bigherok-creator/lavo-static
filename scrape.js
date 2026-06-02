const scrape = require('website-scraper');
const path = require('path');

const sites = [
    { url: 'http://localhost:3013/', directory: path.join(__dirname, 'corp') },
    { url: 'http://localhost:3014/', directory: path.join(__dirname, 'ecom') },
    { url: 'http://localhost:3015/', directory: path.join(__dirname, 'odm') }
];

async function run() {
    for (const site of sites) {
        console.log(`Starting to scrape ${site.url} into ${site.directory}`);
        
        try {
            await scrape({
                urls: [site.url],
                directory: site.directory,
                recursive: true,
                maxDepth: 3, // Prevent infinite loops just in case
                urlFilter: (url) => {
                    // Only scrape URLs from the same host and port
                    return url.startsWith(site.url) || url.startsWith('http://127.0.0.1') || url.startsWith('/');
                },
                filenameGenerator: 'bySiteStructure', // Preserves exact folder structure
                ignoreErrors: true,
                plugins: [
                    class LogPlugin {
                        apply(registerAction) {
                            registerAction('afterResponse', async ({response}) => {
                                console.log(`Downloaded: ${response.request.href}`);
                                return response.body;
                            });
                        }
                    }
                ]
            });
            console.log(`✅ Successfully scraped ${site.url}\n`);
        } catch (err) {
            console.error(`❌ Error scraping ${site.url}:`, err);
        }
    }
}

run();
