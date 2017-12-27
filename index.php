<?php if( !defined('ABSPATH') )  { exit; } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php
	if( isset($_REQUEST['set']) and $_REQUEST['set'] == 'uikit' ) {
		do_action('vue-output-script', 'uk-demo');
	} elseif( isset($_REQUEST['set']) and $_REQUEST['set'] == 'iview' ) {
		do_action('vue-output-script', 'demo-iview');
	} else {
		do_action('vue-output-script', 'index');
	}
?>
</head>
<body>
	<div id="app"></div>
</body>
</html>
