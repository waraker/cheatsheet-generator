<?php

/*

Cheatsheet Generator August 2012

*/

require'lib/markdown1.0.1o.php';
require 'req/function.php';

if(!isset($_GET['file'])) $file = 'readme.md';
else $file = 'document/'.$_GET['file'];

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
	$('#original-container').html2canvas({
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
<section>
<header>
<h1 class="landing">Markdown Cheatsheet Generator</h1>
<h2>Documents:</h2>
<ul>
<?php

foreach(dirArray('document') as $key => $markdown_file){

	?>

	<li><a href="/?file=<?php

	echo $markdown_file;

	?>"><?php

	echo $markdown_file;

	?></a></li><?php

}

?>

</ul>
</header>

<article>
<header>
<h2 class="landing">Original</h2>
</header>
<div id="original-container"><?php

echo Markdown(file_get_contents($file));

?>

</div>
</article>
<article>
<header>
<h2 class="landing">Rendered Cheatsheet</h2>
</header>
<div id="canvas-stage"></div>
<img id="canvas-image">
</article>
</section>
</body>
</html>