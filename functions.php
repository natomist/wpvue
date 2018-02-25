<?php
if( !defined('ABSPATH') )  { exit; }

////Always return status 200 and try to open index.php
//add_filter( 'pre_handle_404', function($status_header) {
//	global $wp_query;
//	$wp_query->set_404();
//	return true;
//} );

//Check maintenance mode
require_once('inc/maintenance.php');

if( is_user_logged_in() ) {
	define('AJAX_PREFIX', 'wp_ajax_');
} else {
	define('AJAX_PREFIX', 'wp_ajax_nopriv_');
}

if( is_user_logged_in() and file_exists(__DIR__.'/inc/minify') and file_exists(__DIR__.'/inc/path-converter') and file_exists(__DIR__.'/inc/less.php') ) {
	define('VUE_DEVELOP', true);
} else {
	define('VUE_DEVELOP', false);
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

	do_action( AJAX_PREFIX.$_REQUEST['action'] );
	exit;
}
