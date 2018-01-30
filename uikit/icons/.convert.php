<?php

$files = scandir('.');
foreach( $files as $file ) {
	if( !preg_match("/\.svg$/", $file) ) {
		continue;
	}
	$content = file_get_contents($file);
	$content = preg_replace('/<svg width="20" height="20"/', '<template><svg class="uk-icon"', $content);
	$content = preg_replace('/<\/svg>$/', '</svg></template>', $content);
	file_put_contents($file, $content);
	rename($file, preg_replace('/^(.*)\.svg$/', 'svg-\\1.vue', $file));
}
