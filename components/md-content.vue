<template>
	<div class="md-content" v-html="content" />
</template>

<script>
module.exports = {
	props: {
		'path': {
			default: '',
		}
	},
	data: function() {
		return {
			content: null,
		};
	},
	watch: {
		'$route.path': {
			immediate: true,
			handler: function() {
				var self = this;

				Vue.http.post('?', {
					action: 'vue-get-md',
					path: self.path,
				}).then(function( response ) {
					self.content = response.body;
				});
			}
		}
	}
}
</script>
