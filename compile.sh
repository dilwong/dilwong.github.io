#!/bin/bash

declare -a files=("index" "research" "publications" "gallery")

for i in "${files[@]}"
do
    php "$i".php > docs/"$i".html
done

cp -R images/ docs/images
cp -R fonts/ docs/fonts
cp -R css/ docs/css
cp -R js/ docs/js

cp CNAME docs/CNAME
cp favicon.ico docs/favicon.ico