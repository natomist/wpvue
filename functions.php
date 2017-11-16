<?php
if( !defined('ABSPATH') )  { exit; }

if( is_user_logged_in() ) {
	$ajax_prefix = 'wp_ajax_';
} else {
	$ajax_prefix = 'wp_ajax_nopriv_';
}

require_once('inc/class-vue-component.php');
require_once('inc/class-vue-output.php');

if( isset($_REQUEST['action']) and !preg_match('/\/wp-admin\//', $_SERVER['SCRIPT_NAME']) ) {
	$_GET       = array_map('stripslashes_deep', $_GET);
	$_POST      = array_map('stripslashes_deep', $_POST);
	$_COOKIE    = array_map('stripslashes_deep', $_COOKIE);
	$_SERVER    = array_map('stripslashes_deep', $_SERVER);
	$_REQUEST   = array_map('stripslashes_deep', $_REQUEST);

	function h404($error = null) {
		http_response_code(404);
		if( $error == null ) {
		} else {
			header( 'Content-Type: application/json; charset=utf-8' );
			echo json_encode([ 'error' => $error ]);
		}
		exit;
	}

	header( 'Content-Type: application/json; charset=utf-8' );
	header( 'X-Robots-Tag: noindex' );
	header( 'X-Content-Type-Options: nosniff' );
	header( 'Cache-Control: no-cache, no-store, must-revalidate' );

	do_action( $ajax_prefix.$_REQUEST['action'] );
	exit;
}
