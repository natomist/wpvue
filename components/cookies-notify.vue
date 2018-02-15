<template>
	<div class="cookies-notify uk-overlay-primary uk-text-center uk-padding-small 
		uk-position-fixed uk-position-z-index uk-position-bottom uk-overlay ">
		By using the {{name}} website you agree to our use of cookies as described in our cookie policy.
		<a href="#">More</a> &nbsp;
		<button class="uk-button uk-button-primary uk-button-small uk-border-rounded">Понял</button>
	</div>
</template>

<script>
module.exports = {
	props: ['name'],
}
</script>
