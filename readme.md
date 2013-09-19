# Markdown Cheatsheet Generator WIP

NOTE: iOS7 breaks the ability to have pixel perfect background images.

Convert Markdown files into `.png` image cheatsheets.

Currently setup for a iPhone 5 lock screen wallpaper (640x1136) with top and bottom padding. Text content set into three columns.

Markdown files are converted into a canvas element, this is then rendered as a `.png`.

## Browser compatibility

Tested on Chrome and Safari.

## Usage

Place your Markdown files in the `./documents` directory.

## Libraries used

### html2canvas
<https://github.com/niklasvh/html2canvas>
<http://html2canvas.hertzen.com/>

### PHP Markdown
<https://github.com/michelf/php-markdown>