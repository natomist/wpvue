<template>
	<div v-if="show" class="cookies-notify uk-overlay-primary uk-text-center uk-padding-small 
		uk-position-fixed uk-position-z-index uk-position-bottom uk-overlay ">
		By using the {{name}} website you agree to our use of cookies as described in our cookie policy.
		<a :href="more">More</a> &nbsp;
		<button class="uk-button uk-button-primary uk-button-small uk-border-rounded" @click="gotit">Понял</button>
	</div>
</template>

<script>
module.exports = {
	props: ['name', 'more'],
	data: function() {
		return {
			show: !/gotitcookies=1/.test(document.cookie),
		};
	},
	methods: {
		gotit: function() {
			var date = new Date();
			date.setTime(date.getTime() + (10*365*24*60*60*1000));
			document.cookie = 'gotitcookies=1; expires=' + date.toUTCString() + '; path=/';
			this.show = false;
		},
	},
}
</script>
