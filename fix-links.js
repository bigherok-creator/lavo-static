const fs = require('fs');
const path = require('path');

function getRelativePrefix(filePath, baseDir) {
    const relativePath = path.relative(baseDir, filePath);
    const depth = relativePath.split(path.sep).length - 1;
    if (depth === 0) return './';
    return '../'.repeat(depth);
}

function replaceInFiles(dir, baseDir) {
    const files = fs.readdirSync(dir);
    for (const file of files) {
        const fullPath = path.join(dir, file);
        if (fs.statSync(fullPath).isDirectory()) {
            replaceInFiles(fullPath, baseDir);
        } else if (fullPath.endsWith('.html') || fullPath.endsWith('.js') || fullPath.endsWith('.css')) {
            let content = fs.readFileSync(fullPath, 'utf8');
            let originalContent = content;
            
            const prefix = getRelativePrefix(fullPath, baseDir);
            
            // Replace absolute Next.js paths with relative paths based on depth
            content = content.replace(/"\/_next\//g, `"${prefix}_next/`);
            content = content.replace(/'\/_next\//g, `'${prefix}_next/`);
            content = content.replace(/url\(\"\/_next\//g, `url("${prefix}_next/`);
            content = content.replace(/url\(\'\/_next\//g, `url('${prefix}_next/`);
            content = content.replace(/url\(\/_next\//g, `url(${prefix}_next/`);

            // Also fix absolute internal links like href="/about" to href="./about/index.html" (simplified)
            // It's safer to just replace href="/" with href="./index.html" for the homepage link
            if (fullPath.endsWith('.html')) {
                content = content.replace(/href="\/"/g, `href="${prefix}index.html"`);
            }

            if (content !== originalContent) {
                fs.writeFileSync(fullPath, content, 'utf8');
            }
        }
    }
}

['corp', 'ecom', 'odm'].forEach(folder => {
    const dir = path.join(__dirname, folder);
    if (fs.existsSync(dir)) {
        console.log(`Fixing links in ${folder}...`);
        replaceInFiles(dir, dir);
    }
});
console.log('Done fixing links!');
