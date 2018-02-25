<?php 
	if( !defined('ABSPATH') )  { exit; } 
	header('HTTP/1.1 200 OK', true, 200);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php do_action('vue-output-script', 'index'); ?>
</head>
<body>
	<div id="app"></div>
</body>
</html>
