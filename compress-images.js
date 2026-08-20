const sharp = require('sharp');
const fs = require('fs');
const path = require('path');

const imgDir = path.join(__dirname, 'assets', 'img');
const files = fs.readdirSync(imgDir).filter(f => /\.(jpg|jpeg|png)$/i.test(f));

console.log(`Found ${files.length} images to compress...`);

(async () => {
  for (const file of files) {
    const inputPath = path.join(imgDir, file);
    const outputPath = path.join(imgDir, path.basename(file, path.extname(file)) + '.webp');
    
    const before = fs.statSync(inputPath).size;
    
    await sharp(inputPath)
      .resize({ width: 1200, withoutEnlargement: true })
      .webp({ quality: 75 })
      .toFile(outputPath);
    
    const after = fs.statSync(outputPath).size;
    const saved = Math.round((1 - after/before) * 100);
    console.log(`✅ ${file} → ${path.basename(outputPath)} | ${Math.round(before/1024)}KB → ${Math.round(after/1024)}KB (${saved}% saved)`);
  }
  console.log('\n✅ All images compressed!');
})();
