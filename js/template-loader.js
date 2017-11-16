(function (exports) {

	var isHTMLTag = [
		'html', 'body', 'base', 'head', 'link', 'meta', 'style', 'title',
		'address', 'article', 'aside', 'footer', 'header', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'hgroup', 'nav', 'section',
		'div', 'dd', 'dl', 'dt', 'figcaption', 'figure', 'picture', 'hr', 'img', 'li', 'main', 'ol', 'p', 'pre', 'ul',
		'a', 'b', 'abbr', 'bdi', 'bdo', 'br', 'cite', 'code', 'data', 'dfn', 'em', 'i', 'kbd', 'mark', 'q', 'rp', 'rt', 'rtc', 'ruby',
		's', 'samp', 'small', 'span', 'strong', 'sub', 'sup', 'time', 'u', 'var', 'wbr', 'area', 'audio', 'map', 'track', 'video',
		'embed', 'object', 'param', 'source', 'canvas', 'script', 'noscript', 'del', 'ins',
		'caption', 'col', 'colgroup', 'table', 'thead', 'tbody', 'td', 'th', 'tr',
		'button', 'datalist', 'fieldset', 'form', 'input', 'label', 'legend', 'meter', 'optgroup', 'option',
		'output', 'progress', 'select', 'textarea',
		'details', 'dialog', 'menu', 'menuitem', 'summary',
		'content', 'element', 'shadow', 'template', 'blockquote', 'iframe', 'tfoot',
		'svg', 'animate', 'circle', 'clippath', 'cursor', 'defs', 'desc', 'ellipse', 'filter', 'font-face',
		'foreignObject', 'g', 'glyph', 'image', 'line', 'marker', 'mask', 'missing-glyph', 'path', 'pattern',
		'polygon', 'polyline', 'rect', 'switch', 'symbol', 'text', 'textpath', 'tspan', 'use', 'view', 
		'router-view', 'router-link', 'slot', 'component',
	];

	var err = function(responce) {
		if( responce.body != null && responce.body.error != null ) {
			throw responce.body.error;
		}
		throw responce;
	}

	var deepASP = function(asp, components) {
		if( asp.tag == null && asp.children == null ) {
			return;
		}
		if( isHTMLTag.indexOf(asp.tag) == -1 ) {
			if( components.indexOf(asp.tag) == -1 ) {
				components.push(asp.tag);
			}
		}

		for(var i = 0; i < asp.children.length; i++) {
			deepASP(asp.children[i], components);
		}
	}

	var parseComponent = function(content) {
		var parsed = VueTemplateCompiler.parseComponent( content );
		var js = '(function(){var module={exports:{}};';
		if( parsed.script != null ) {
			js += parsed.script.content + ';';
		}
		var components = [];
		if( parsed.template != null ) {
			var compiled = VueTemplateCompiler.compile(parsed.template.content, { preserveWhitespace: false });
			if( compiled.errors.length > 0 ) {
				throw compiled.errors;
			}

			deepASP(compiled.ast, components);

			if( compiled.errors.length > 0 ) {
				throw compiled.errors;
			}
			js += 'module.exports.render = function(){' + compiled.render + '}; module.exports.staticRenderFns=[';
			for(var i = 0; i < compiled.staticRenderFns.length; i++) {
				js += 'function(){' + compiled.staticRenderFns[i] + '},';
			}
			js += '];';
		}
		js += 'return module.exports;})()';

		var css = '';
		for(var i = 0; i < parsed.styles.length; i++) {
			css += parsed.styles[i].content;
		}

		return { css: css, js: js, components: components };
	}

	var updateBundles = function(components, root, changed) {
		if( changed ) {
			return Vue.http.post('/', {
				action: 'vue-update-bundles',
				name: root,
			}).then(function(responce) {
				return updateCSS(components, root);
			}, err);
		}

		return updateCSS(components, root);
	}

	var updateCSS = function(components, root) {
		return Vue.http.post('/', {
			action: 'vue-get-css',
			name: root,
		}).then(function(responce) {
			document.getElementById('css').setAttribute('href', responce.bodyText);
			updateLanguages(components, root);
		}, err);
	}

	var updateLanguages = function(components, root) {
		return Vue.http.post('/', {
			action: 'vue-get-languages',
			name: root,
		}).then(function(responce) {
			window.languages = responce.body;
			run(components, root);
		}, err);
	}

	var run = function(components, root) {
		for(var name in components) {
			if( name == root ) {
				continue;
			}
			try {
				Vue.component(name, eval(components[name].js));
			} catch(err) {
				throw ['Error in component '+name, err];
			}
		}

		try {
			Vue.component(root, eval(components[root].js));
			var el = new (Vue.component(root))().$mount("#app");
		} catch(err) {
			throw ['Error in root component', err];
		}
	}

	exports.parseComponents = function(components, root, changed) {
		for(var key in components) {
			if( components[key] == null ) {
				return Vue.http.post('/', { 
					action: 'vue-get-component',
					name: key,
				}).then(function(responce) {
					for(var key in responce.body) {
						if( components[key] == null ) {
							components[key] = responce.body[key];
						}
					}
					return loader.parseComponents(components, root, true);
				}, err);
			} else if( components[key].js == null ) {
				try {
					var compiled = parseComponent(components[key].source);
				} catch(e) {
					throw ['Error during compiling component '+key, e];
				}
				components[key] = compiled;

				var jsComponents = compiled.js.match(/Vue\.component\('[^']+'\)/g);
				for(var item in jsComponents) {
					var component = jsComponents[item].match(/Vue\.component\('([^']+)'\)/)[1];
					compiled.components.push( component );
				}

				for(var item in compiled.components) {
					if( components[compiled.components[item]] == null ) {
						components[compiled.components[item]] = null;
					}
				}
				return Vue.http.post('/', {
					action: 'vue-update-component', 
					name: key, 
					body: JSON.stringify(compiled),
				}).then(function() {
					return loader.parseComponents(components, root, true);
				}, err);
			}
		}

		return updateBundles(components, root, changed);
	}

})(this.loader = {});

Vue.http.options.emulateJSON = true;

