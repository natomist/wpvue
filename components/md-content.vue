<template>
	<div class="md-content" v-html="content" />
</template>

<script>
module.exports = {
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
				}).then(function( response ) {
					self.content = response.body;
					console.log( response.body );
				});
			}
		}
	}
}
</script>
