<?php
if( !defined('ABSPATH') )  { exit; }

if( isset($_REQUEST['action']) and $_REQUEST['action'] == "vue-get-md" ) {
	if( !is_file(__DIR__.'/parsedown/Parsedown.php') ) {
		h404();
	}
	// https://github.com/erusev/parsedown
	require_once 'parsedown/Parsedown.php';
}

class VueOutput {

	public function vueCachedScripts($scripts) {
		$scripts[] = get_template_directory().'/js/vue.runtime.min.js';
		$scripts[] = get_template_directory().'/js/vue-resource.min.js';
		$scripts[] = get_template_directory().'/js/vue-router.min.js';

		return $scripts;
	}

	public function vueOutputScript($component) {
		global $vueComponent;

		if( VUE_DEVELOP ) {
			$list = apply_filters('vue-cached-scripts', []);
			$list[] = get_template_directory().'/js/vue-template-compiler.min.js';
			$list[] = get_template_directory().'/js/template-loader.js';

			foreach( $list as $item ) {
				$item = preg_replace('/\.min\.js$/', '.js', $item);
				echo '<script src="', substr($item, strlen(ABSPATH)-1), '"></script>';
			}

			echo '<script>';
			try {
				$components = $vueComponent->getCleanComponentDeep($component);
				echo 'window.languages = {};';
				$vueComponent->getScript(
					'loader.parseComponents('.json_encode($components).','.json_encode($component).', false)',
					'window.languages', '', $component);
			} catch(Exception $e) {
				echo 'throw "', esc_html($e->getMessage()), '"';
			}
			echo '</script>';
			echo '<style id="css"></style>';
		} else {
			$component = $vueComponent->getComponent($component);
			echo '<script src="?action=vue-gzip&section=cache&name=', $component['jsBundle'], '"></script>';
			echo '<link rel="stylesheet" type="text/css" href="?action=vue-gzip&section=cache&name=', $component['cssBundle'], '" />';
		}
	}

	public function vueGzip() {
		try {
			if( !isset($_REQUEST['section']) or preg_match('/\.\.|\//', $_REQUEST['section']) ) {
				throw(new Exception());
			}
			if( !isset($_REQUEST['name']) or preg_match('/\.\.|\//', $_REQUEST['name']) ) {
				throw(new Exception());
			}
			if( !preg_match("/\.\w+$/", $_REQUEST['name'], $extension) ) {
				throw(new Exception());
			}
			$filename = get_stylesheet_directory().'/'.$_REQUEST['section'].'/'.$_REQUEST['name'].'.gz';
			if( !file_exists($filename) ) {
				throw(new Exception());
			}
			$extensions = [
				'.css' => 'text/css',
				'.jpg' => 'image/jpeg',
				'.png' => 'image/png',
				'.gif' => 'image/gif',
				'.ico' => 'image/x-icon',
				'.svg' => 'image/svg+xml',
				'.js' => 'application/javascript',
				'.json' => 'application/json',
				'.map' => 'application/json',
			];
		
			if( !isset($extensions[$extension[0]]) ) {
				throw(new Exception());
			}

			header( 'Content-Encoding: gzip' );
			header( 'Content-Type: '.$extensions[$extension[0]].'; charset=utf-8' );
			header( 'Cache-Control: max-age=31536000, must-revalidate' );
			header( 'Expires: '.gmdate('D, d M Y H:i:s', time() + 31536000).' GMT');
			readfile($filename);
			exit;
		} catch(Exception $e) {
			h404( $e->getMessage() );
		}
	}

	public function vueGetMD() {
		global $vueComponent;

		try {
			if( !isset($_REQUEST['name']) or preg_match('/\.|\//', $_REQUEST['name']) ) {
				throw(new Exception());
			}
			$filename = get_template_directory().'/'.$_REQUEST['name'].'.md';
			if( !file_exists($filename) ) {
				throw(new Exception('File not found'));
			}
			$parsedown = new Parsedown();
			$content = $parsedown->parse(file_get_contents($filename));
			preg_match_all('/<p><a href="#([^"]+)"><\/a><\/p>/m', $content, $components);
			$components = $components[1];
			$parts = preg_split('/<p><a href="#[^\"]+"><\/a><\/p>/m', $content);

			$ret = [];
			for($i = 0; $i < count($parts); $i++) {
				$ret[] = [ 'html' => $parts[$i] ];

				if( $i < count($components) ) {
					$path = $vueComponent->searchComponent($components[$i]);
					$ret[] = $item = [
						'name' => $components[$i],
						'code' => file_get_contents($path),
					];
				}
			}
			echo json_encode($ret);
		} catch(Exception $e) {
			h404( $e->getMessage() );
		}
	}

	public function __construct() {
		add_filter('vue-cached-scripts', [$this, 'vueCachedScripts'], 0);
		add_action('vue-output-script', [$this, 'vueOutputScript']);

		add_action(AJAX_PREFIX.'vue-get-md', [$this, 'vueGetMD']);
		add_action(AJAX_PREFIX.'vue-gzip', [$this, 'vueGzip']);
	}
}

new VueOutput();
