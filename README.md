
# Wordpress Vue.js theme

## Summary

This theme is for using to create front end from set of Vue.js components. You don't need npm, webpack or other tools to work with this theme.
Just create set of .vue files and this theme will create single js which includes Vue.js and all compiled components.
If you update any .vue file this theme will update javascript and CSS bundle automatically. Javascript and CSS are minified and compressed.
Preference is given to the speed of development. So you will see changes just after updating sources.

If you have good Wordpress experience it is fast way to begin use Vue.js

This theme includes folowing tools:
1. [Vue.js](https://github.com/vuejs/vue)
2. [vue-resource](https://github.com/pagekit/vue-resource)
3. [vue-router](https://github.com/vuejs/vue-router)
4. [lessphp](https://github.com/leafo/lessphp)
5. [minify](https://github.com/matthiasmullie/minify)
6. [iview components](https://github.com/iview/iview) Adapted version

[Tons of manuals and informations related with Vue.js](https://github.com/vuejs/awesome-vue)

Because this theme redefines Front End mechanism it is impossible to use most Wordpress plugins

## Installation

1. Download theme
```
cd wp-content/themes
git clone https://github.com/natomist/wpvue.git wpvue
cd wpvue
git submodule init
git submodule update
```
2. Create new child theme
	1. Create file **style.css** in child theme
	```
	/*
	Theme Name: child
	Template: wpvue
	*/
	```
	2. Create your **index.vue** which will be root Vue component
	```
	<style>
		.demo-vue {
			span {
				font-weight: bold;
			}
		}
	</style>
	<template>
		<div class="demo-vue">
			<input v-model='name' /><br />
			Hello, <span>{{name}}</span>
		</div>
	</template>
	<script>
		module.exports = {
			data: function() {
				return {
					name: 'Sam'
				}
			}
		}
	</script>
	```

## Usage

### Entry point
Typical **index.php** looks like this
```
<?php if( !defined('ABSPATH') )  { exit; } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php
	do_action('vue-output-script', 'index');
?>
</head>
<body>
	<div id="app"></div>
</body>
</html>
```
Action ***vue-output-script*** accept name of root component. **index.vue** should exist in theme.
You can implement other entry points according to Wordpress Template File Hierarchy.
But in this case it will be impossible to navigate to another page without reloading entire page.

### Using components
wpvue automatically includes component to bundle if you mention it in section template or script:
```
<template>
	<component-1 />
</template>
<script>
//Vue.component('component-2');
module.exports = {
	data: function() {
		return {
			component: new (Vue.component('component-3'))({ parent: this }),
		}
	},
}
</script>
```
wpvue will search files component-1.vue, component-2.vue and component-3.vue and include them to javascript and CSS bundle.

Paths for searching components:
1. root folder of theme
2. components
3. svg
You can free feel choosing directory for your own components.

You don't have to use **require** to include components.

