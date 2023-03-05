#!/bin/bash

# Build script for serving static content instead of php files
DEST="./public_html"
html=".html"

# Create destination folder
mkdir -p "$DEST/"

#Copy all files
cp -r ./* ./$DEST/
echo "Processing all files..";

# Execute all php files and save them as html
for f in *.php; 
do
    php $f | sed 's:\(<a.*href=".*\)\.php\(".*</a>\):\1\.html\2:g' > "$DEST/${f/.php/$html}";
    echo "Processing $f into ${f/.php/$html}..";
done

echo "Process complete." ;

# Netlify - Build command: chmod +x build.sh && ./build.sh
# Netlify - Publish directory: public_html/