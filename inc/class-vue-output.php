<?php
if( !defined('ABSPATH') )  { exit; }

if( isset($_REQUEST['action']) and $_REQUEST['action'] == 'vue-get-md' ) {
	// https://github.com/erusev/parsedown
	require_once 'parsedown/Parsedown.php';
}
if( !isset($_REQUEST['action']) or in_array($_REQUEST['action'], ['vue-get-md', 'vue-get-title']) ) {
	// https://github.com/mustangostang/spyc
	require_once 'spyc/Spyc.php';
}

class VueOutput {

	private $meta = '';

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

		// Fix: add here open graph from $this->meta
		if( isset($this->meta['title']) ) {
			echo '<title>', esc_html($this->meta['title']), '</title>';
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

	private function parse($meta, $file, $skipFragment) {
		$content = file_get_contents($file);

		if( preg_match('/(---[\s\S]+)\.\.\./', $content, $output) ) {
			$meta = array_merge( $meta, spyc_load_file($output[1]) );

			if( $skipFragment and isset($meta['fragment']) and $meta['fragment'] == 1 ) {
				return $meta;
			}
			$content = str_replace($output[0], '', $content);
		}

		$content = trim($content);
		if( $content != '' ) {
			$meta['content'] = $content;
		}

		return $meta;
	}

	private function searchMD($url = null) {
		if( $url == null ) {
			$url = $_SERVER['REQUEST_URI'];
			$skipFragment = true;
		} else {
			$skipFragment = false;
		}
		if( !preg_match('/^(?:\/[^\/?.]*)+/', $url, $output) ) {
			return null;
		}
		$output = $output[0];

		$meta = [];

		if( preg_match('/\/$/', $output) ) {
			$output .= 'index';
		}
		$output = explode('/', $output);

		$path = get_stylesheet_directory().'/content';
		foreach($output as $node) {
			$path .= $node;
			if( file_exists( $path.'/index.md' ) ) {
				$meta = $this->parse( $meta, $path.'/index.md', $skipFragment );
			} elseif( file_exists( $path.'.md') ) {
				$meta = $this->parse( $meta, $path.'.md', $skipFragment );
			}
			$path .= '/';
		}

		return $meta;
	}

	public function vueGetTitle() {
		if( isset($this->meta['title']) ) {
			echo json_encode( $this->meta['title'] );
			exit;
		}
		echo json_encode( null );
		exit;
	}

	public function vueGetMD() {
		if( empty($_REQUEST['path']) ) {
			$this->meta = $this->searchMD();
		} else {
			$this->meta = $this->searchMD( $_REQUEST['path'] );
		}
		if( isset($this->meta['content']) ) {
			$parsedown = new Parsedown();
			$content = $parsedown->parse( $this->meta['content'] );

			echo json_encode( $content );
			exit;
		}
		echo json_encode( null );
		exit;
	}

	public function __construct() {
		if( !isset($_REQUEST['action']) or $_REQUEST['action'] == 'vue-get-title' ) {
			$this->meta = $this->searchMD();
		}

		add_filter('vue-cached-scripts', [$this, 'vueCachedScripts'], 0);
		add_action('vue-output-script', [$this, 'vueOutputScript']);

		add_action(AJAX_PREFIX.'vue-get-title', [$this, 'vueGetTitle']);
		add_action(AJAX_PREFIX.'vue-get-md', [$this, 'vueGetMD']);
		add_action(AJAX_PREFIX.'vue-gzip', [$this, 'vueGzip']);
	}
}

$vueOutput = new VueOutput();
