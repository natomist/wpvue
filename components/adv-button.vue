<template>
	<router-link :to="{name: name}" class="uk-button" v-text="title" />
</template>

<script>
module.exports = {
	props: [
		'name',
	],
	computed: {
		title: function() {
			return this.t(this.$router.resolve({ name: this.name, params: this.$route.params }).route.meta.name);
		},
	},
}
</script>
