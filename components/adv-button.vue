<template>
	<router-link :to="{name: name}" class="uk-button" v-text="name" />
</template>

<script>
module.exports = {
	props: [
		'name',
	],
}
</script>
