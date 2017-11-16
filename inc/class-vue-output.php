<?php
if( !defined('ABSPATH') )  { exit; }

if( isset($_REQUEST['action']) and $_REQUEST['action'] == "vue-get-md" ) {
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

		if ( is_user_logged_in() ) {
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
			echo '<link id="css" rel="stylesheet" type="text/css" />';
		} else {
			$component = $vueComponent->getComponent($component);
			echo '<script src="', get_stylesheet_directory_uri(), '/cache/', $component['jsBundle'], '"></script>';
			echo '<link rel="stylesheet" type="text/css" href="', get_stylesheet_directory_uri(), '/cache/', $component['cssBundle'], '" />';
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
		global $ajax_prefix;

		add_filter('vue-cached-scripts', [$this, 'vueCachedScripts'], 0);
		add_action('vue-output-script', [$this, 'vueOutputScript']);

		add_action("${ajax_prefix}vue-get-md", [$this, 'vueGetMD']);
	}
}

new VueOutput();
