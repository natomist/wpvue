<?php
if( !defined('ABSPATH') )  { exit; }

if( file_exists(ABSPATH.'maintenance.txt') and empty($_REQEST['action']) ) {

	$maintenance = file_get_contents(ABSPATH.'maintenance.txt');
	if( strpos($maintenance, $_SERVER['REMOTE_ADDR']) === false ) {
		$search = [ get_stylesheet_directory(), get_template_directory() ];

		foreach($search as $path) {
			if( file_exists($path.'/maintenance.html') ) {
				readfile($path.'/maintenance.html');
				exit;
			}
		}
		exit;
	}
}
