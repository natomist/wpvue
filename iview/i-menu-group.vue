<template>
	<li class="ivu-menu-item-group">
		<div class="ivu-menu-item-group-title">{{title}}</div>
		<ul><slot /></ul>
	</li>
</template>
<script>
module.exports = {
	props: {
		title: {
			type: String,
			default: ''
		}
	},
};
</script>
