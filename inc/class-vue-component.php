<?php
if( !defined('ABSPATH') )  { exit; }

if( is_user_logged_in() ) {
	// https://github.com/matthiasmullie/minify
	require_once 'minify/src/Minify.php';
	require_once 'minify/src/CSS.php';
	require_once 'minify/src/JS.php';
	require_once 'minify/src/Exception.php';
	require_once 'minify/src/Exceptions/BasicException.php';
	require_once 'minify/src/Exceptions/FileImportException.php';
	require_once 'minify/src/Exceptions/IOException.php';
	require_once 'path-converter/src/ConverterInterface.php';
	require_once 'path-converter/src/Converter.php';

	// https://github.com/oyejorge/less.php
	require_once 'less.php/lessc.inc.php';
}

class VueComponent {

	private $componentPaths;
	private $themeCrop;

	private function init() {
		$this->componentPaths = [ 
			get_stylesheet_directory(), 
			get_stylesheet_directory().'/components', 
			get_stylesheet_directory().'/svg',
			get_template_directory(), 
			get_template_directory().'/uikit', 
			get_template_directory().'/uikit/icons', 
			get_template_directory().'/iview', 
			get_template_directory().'/components', 
			get_template_directory().'/experimental',
			get_template_directory().'/svg',
		];

		$this->themeCrop = strlen(get_theme_root());
	}

	public function searchComponent($name) {
		if( preg_match('/\./', $name ) ) {
			throw new Exception('Wrong name of component '.$name);
		}

		foreach($this->componentPaths as $path) {
			if( file_exists($path.'/'.$name.'.vue') ) {
				return $path.'/'.$name.'.vue';
			}
		}

		throw new Exception('Component '.$name.' is not found');
	}

	private function getComponentCachedPath($path) {
		$name = preg_replace('/\/|\./', '-', substr($path, $this->themeCrop+1));
		$cachePath = get_stylesheet_directory().'/cache/';

		if( !file_exists($cachePath) ) {
			mkdir($cachePath);
		}
		return $cachePath.$name.'.json';
	}

	public function getComponent($name) {
		$componentPath = $this->searchComponent($name);
		$componentCachedPath = $this->getComponentCachedPath($componentPath);

		if( file_exists($componentCachedPath) and (filemtime($componentCachedPath) > filemtime($componentPath) or !is_user_logged_in() ) ) {
			return json_decode(file_get_contents($componentCachedPath), true);
		}

		return [
			'source' => file_get_contents($componentPath),
		];
	}

	public function getCleanComponentDeep($name) {
		$components = $this->getComponentDeep($name);
		foreach($components as &$value) {
			if( isset($value['css']) ) {
				unset($value['css']);
			}
			if( isset($value['jsMin']) ) {
				unset($value['jsMin']);
			}
			if( isset($value['bundleTerms']) ) {
				unset($value['bundleTerms']);
			}
			if( isset($value['jsBundle']) ) {
				unset($value['jsBundle']);
			}
			if( isset($value['cssBundle']) ) {
				unset($value['cssBundle']);
			}
		}
		unset($value);
		return $components;
	}

	public function getComponentDeep($name) {
		$ret = [ $name => null ];

		for(;;) {
			$break = true;
			foreach($ret as $key => $value) {
				if( $value != null ) {
					continue;
				}
				$break = false;

				$component = $this->getComponent($key);
				if( isset($component['components']) ) {
					foreach($component['components'] as $item) {
						if( !isset($ret[$item]) ) {
							$ret[$item] = null;
						}
					}
				}

				$ret[$key] = $component;
			}

			if( $break ) {
				break;
			}
		}

		return $ret;
	}

	public function ajaxGetLanguages() {
		try {
			if( !isset($_REQUEST['name']) ) {
				throw(new Exception);
			}

			$component = $this->getComponent($_REQUEST['name']);
			if( !isset($component['bundleTerms']) ) {
				throw(new Exception('There is no terms bundle for this component.'));
			}

			echo json_encode($component['bundleTerms']);
		} catch(Exception $e) {
			h404( $e->getMessage() );
		}
	}

	public function ajaxGetCSS() {
		try {
			if( !isset($_REQUEST['name']) ) {
				throw(new Exception);
			}

			$component = $this->getComponent($_REQUEST['name']);
			if( !isset($component['cssBundle']) ) {
				throw(new Exception('There is no css bundle for this component.'));
			}

			echo parse_url(get_stylesheet_directory_uri(), PHP_URL_PATH ), '/cache/', $component['cssBundle'];

		} catch(Exception $e) {
			h404( $e->getMessage() );
		}
	}

	public function ajaxGetComponent() {
		try {
			if( !isset($_REQUEST['name']) ) {
				throw(new Exception);
			}

			echo json_encode($this->getComponentDeep($_REQUEST['name']));

		} catch(Exception $e) {
			h404( $e->getMessage() );
		}
	}

	public function ajaxUpdateComponent() {
		try {
			if( !isset($_REQUEST['name']) or !isset($_REQUEST['body']) ) {
				throw(new Exception);
			}

			$componentPath = $this->searchComponent($_REQUEST['name']);
			$componentCachedPath = $this->getComponentCachedPath($componentPath);

			$body = json_decode($_REQUEST['body'], true);

			$body['terms'] = [];
			if( preg_match_all('/\bt\([\'"]([\w\.]*)[\'"]\)|\/\*\*\/[\'"]([\w\.]*)[\'"]/', $body['js'], $output) ) {
				foreach( $output[1] as $term ) {
					if( trim($term) != '' ) {
						$body['terms'][] = $term;
					}
				}
				foreach( $output[2] as $term ) {
					if( trim($term) != '' ) {
						$body['terms'][] = $term;
					}
				}
			}

			$minifier = new MatthiasMullie\Minify\JS();
			$minifier->add($body['js']);
			$body['jsMin'] = $minifier->minify();

			file_put_contents($componentCachedPath, json_encode($body));
		} catch(Exception $e) {
			h404( $e->getMessage() );
		}
	}

	public function ajaxUpdateBundles() {
		try {

			if( !isset($_REQUEST['name']) ) {
				throw(new Exception);
			}
			$css = [];

			ob_start();

			$list = apply_filters('vue-cached-scripts', []);
			foreach($list as $item) {
				echo file_get_contents($item);
			}

			$components = $this->getComponentDeep($_REQUEST['name']);
			$js = [];
			$terms = [];
			foreach($components as $name => $component) {
				$terms = array_merge($terms, $component['terms']);

				//$js[] = 'Vue.component('.json_encode($name).','.$component['jsMin'].');';
				// Root element should be in the end
				if( $name != $_REQUEST['name'] ) {
					$css[] = $component['css'];
					$js[] = json_encode($name).':Vue.extend('.$component['jsMin'].')';
				}
			}
			$bundleTerms = $this->updateTerms($_REQUEST['name'], $terms);

			//$js[] = 'new (Vue.component('.json_encode($_REQUEST['name']).'))().$mount("#app");';
			//$js = implode(' ', $js);
			ob_start(); 
			$this->getScript(
				'new Vue('.$components[$_REQUEST['name']]['jsMin'].').$mount("#app")',
				json_encode($terms), implode(',', $js), $_REQUEST['name']);
			$js = ob_get_clean();
			$minifier = new MatthiasMullie\Minify\JS();
			$minifier->add($js);
			echo $minifier->minify();

			$path_prefix = get_stylesheet_directory().'/cache/'.$_REQUEST['name'];

			$list = glob( $path_prefix.'-*.js*' );
			foreach($list as $file) {
				unlink($list);
			}
			$list = glob( $path_prefix.'-*.css*' );
			foreach($list as $file) {
				unlink($list);
			}

			$js = ob_get_clean();
			$md5 = md5($js);
			file_put_contents( $path_prefix.'-'.$md5.'.js', $js );
			file_put_contents( $path_prefix.'-'.$md5.'.js.gz', gzencode($js) );

			$componentPath = $this->searchComponent($_REQUEST['name']);
			$componentCachedPath = $this->getComponentCachedPath($componentPath);
			$body = json_decode(file_get_contents($componentCachedPath), true);
			$body['bundleTerms'] = $bundleTerms;
			$body['jsBundle'] = $_REQUEST['name'].'-'.$md5.'.js';
			$css[] = $body['css'];

			$css = implode(' ', $css);
			$md5 = md5($css);
			if( empty($body['cssBundle']) or $body['cssBundle'] != $md5.'.css' ) {
				$lessc = new lessc;
				$css = $lessc->compile( $css );
				$minifier = new MatthiasMullie\Minify\CSS();
				$minifier->add($css);
				$css = $minifier->minify();
				file_put_contents( $path_prefix.'-'.$md5.'.css', $css );
				file_put_contents( $path_prefix.'-'.$md5.'.css.gz', gzencode($css) );

				$body['cssBundle'] = $_REQUEST['name'].'-'.$md5.'.css';
			}

			file_put_contents($componentCachedPath, json_encode($body));
			file_put_contents($componentCachedPath.'.gz', gzencode(json_encode($body)));
		} catch(Exception $e) {
			h404( $e->getMessage() );
		}
	}

	public function getScript($mount, $termsStr, $componentsStr, $root) {
		?>
		function oneOf(value, ar) {
			return ar.indexOf(value) != -1;
		};
		document.addEventListener("DOMContentLoaded", function() {
			var fetchLanguage = function() {
				if( this.$route == null || this.$route.params.lang == null ) {
					return;
				}
				var lang = this.$route.params.lang;
				var $root = this.$root;
				if( $root.terms == null ) {
					throw "Please declare term variable in $root element";
				}
				if( $root.terms[lang] == null ) {
					Vue.http.post('/', {
						action: 'vue-terms-get',
						lang: lang,
						root: <?php echo json_encode($root); ?>,
					}).then(function(responce) {
						Vue.set($root.terms, lang, responce.body);
					}, function(responce) {
						throw(responce);
					});
				}
			};

			Vue.http.options.emulateJSON = true;
			Vue.mixin({
				data: function() {
					if( this == this.$root ) {
						return {
							terms: {},
						};
					} else {
						return {};
					}
				},
				created: function() {
					if( this != this.$root ) {
						return;
					}
					this.$watch('$route.params.lang', fetchLanguage, { immediate: true, });
				},
				methods: {
					t: function(term) {
						if( this.$route == null || this.$route.params.lang == null ) {
							return;
						}
						var lang = this.$route.params.lang;
						var $root = this.$root;
						if( $root.terms != null && $root.terms[lang] != null && $root.terms[lang][term] != null ) {
							return $root.terms[lang][term];
						}
						return '!'+term;
					},
					getLanguages: function() {
						return <?php echo $termsStr; ?>
					},
					getParent(name) {
						var parent = this.$parent;
						while(parent) {
							if( parent.name == name ) {
								return parent;
							}
							parent = parent.$parent;
						}

						return null;
					},
				},
				components: {
					<?php echo $componentsStr; ?>
				}
			});
			<?php echo $mount; ?>
		},false);
		<?php 
	}

	private function updateTerms($name, $terms) {
		$componentPath = $this->searchComponent($name);
		$name = preg_replace('/\/|\./', '-', substr($componentPath, $this->themeCrop+1));
		$termsPath = get_stylesheet_directory().'/terms/';
		if( !file_exists($termsPath) ) {
			mkdir($termsPath);
		}
		$termsPath = get_stylesheet_directory().'/terms/'.$name.'/';
		if( !file_exists($termsPath) ) {
			mkdir($termsPath);
		}
		touch( $termsPath.'en.csv' );

		$englishTerms = [];
		$content = json_encode( $this->processTermFile($termsPath, 'en.csv', $terms, $englishTerms) );
		$md5 = md5($content);
		$newTerms['en'] = $md5.'.json.gz';
		file_put_contents( get_stylesheet_directory().'/cache/'.$md5.'.json.gz', gzencode($content, 9) );

		foreach( scandir($termsPath) as $file ) {
			if( $file == '.' or $file == '..' or $file== 'en.csv' ) {
				continue;
			}
			$keys = explode('.', $file);
			if( count($keys) != 2 ) {
				continue;
			}
			$content = $this->processTermFile($termsPath, $file, $terms, $englishTerms);
			$content = json_encode($content);
			$md5 = md5($content);
			$newTerms[$keys[0]] = $md5.'.json.gz';
			file_put_contents( get_stylesheet_directory().'/cache/'.$md5.'.json.gz', gzencode($content, 9) );
		}

		return $newTerms;
	}

	private function processTermFile($termsPath, $file, $terms, &$english) {
		if( $file == 'en.csv' ) {
			$cols = 2;
		} else {
			$cols = 3;
		}

		$json = [];
		foreach( $terms as $key ) {
			$json[ $key ] = '';
		}
		foreach( file($termsPath.$file) as $row ) {
			$values = str_getcsv($row);
			if( count($values) != $cols ) {
				continue;
			}

			$key = $values[0];
			if( substr($key, 0, 1) == '_' ) {
				$key = substr($key, 1);
			}
			if( !in_array( $key, $terms ) ) {
				$key = '_'.$key;
			}
			$json[$key] = $values[$cols-1];

			if( $cols == 2 && in_array($key, $terms) ) {
				$english[$key] = $values[$cols-1];
			}
		}

		$outputBuffer = fopen($termsPath.$file, 'w');
		foreach( $json as $key => $value ) {
			if( $cols == 2 ) {
				fputcsv( $outputBuffer, [ $key, $value ] );
			} else {
				fputcsv( $outputBuffer, [ $key, isset($english[$key])?$english[$key]:'', $value ] );
			}
		}
		fclose($outputBuffer);

		return $json;
	}

	public function ajaxTermsGet() {
		try {
			header('Content-type: text/plain');
			if( !isset($_REQUEST['lang']) or !isset($_REQUEST['root']) ) {
				throw(new Exception);
			}

			$component = $this->getComponent($_REQUEST['root']);
			if( !isset($component['bundleTerms']) or !isset($component['bundleTerms'][$_REQUEST['lang']]) ) {
				throw new Exception();
			}
			header('Content-Encoding: gzip');
			readfile( get_stylesheet_directory().'/cache/'.$component['bundleTerms'][$_REQUEST['lang']] );
		} catch(Exception $e) {
			h404( $e->getMessage() );
		}
	}

	public function __construct() {
		global $ajax_prefix;
		$this->init();

		if( is_user_logged_in() ) {
			add_action('wp_ajax_vue-get-component', [$this, 'ajaxGetComponent']);
			add_action('wp_ajax_vue-get-css', [$this, 'ajaxGetCSS']);
			add_action('wp_ajax_vue-get-languages', [$this, 'ajaxGetLanguages']);
			add_action('wp_ajax_vue-update-component', [$this, 'ajaxUpdateComponent']);
			add_action('wp_ajax_vue-update-bundles', [$this, 'ajaxUpdateBundles']);
		}

		add_action("${ajax_prefix}vue-terms-get", [$this, 'ajaxTermsGet']);
	}
}

$vueComponent = new VueComponent();
