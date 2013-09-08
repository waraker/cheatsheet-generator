<?php

/*

Cheatsheet Generator August 2012

*/

require'lib/markdown1.0.1o.php';

$file = 'readme.md';

?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Cheatsheet Generator</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="lib/jquery1.8.0.min.js"></script>
<script src="lib/html2canvas0.34.js"></script>
<script src="lib/jquery.plugin.html2canvas0.34.js"></script>
<script>
$(window).ready(function(){
	$('#container').html2canvas({
		onrendered:function(canvas){
			$('#canvas-stage').html(canvas);
			// http://www.html5canvastutorials.com/advanced/html5-canvas-save-drawing-as-an-image/
			var canvasData = document.getElementById("rendered-canvas");
			var context = canvasData.getContext("2d");
			// Save canvas image as data url (png format by default)
			var dataURL = canvasData.toDataURL();
			// Set canvas-image image src to dataURL so it can be saved as an image
			document.getElementById("canvas-image").src = dataURL;
		}
	});
});
</script>

</head>
<body>
<h1 class="landing">Markdown Cheatsheet Generator</h1>
<div class="column">
<h2 class="landing">original</h2>
<div id="container"><?php

echo Markdown(file_get_contents($file));

?></div>
<div id="canvas-stage"></div>
</div>
<div class="column"></div>
<h2 class="landing">rendered cheatsheet</h2>
<img id="canvas-image">
</body>
</html>