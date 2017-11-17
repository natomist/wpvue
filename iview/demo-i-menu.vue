<template>
	<demo-wrapper>
		<i-menu :mode="model.mode.value" :theme="model.theme.value"
				:width="model.width.value">
			<i-menu-item name="1">
				<i-icon type="ios-paper" />Content management
			</i-menu-item>
			<i-menu-item name="2">
				<i-icon type="ios-people" />User Management
			</i-menu-item>
			<i-submenu name="3">
				<template slot="title">
					<i-icon type="stats-bars" />Statistical Analysis
				</template>
				<i-menu-group title="Use">
					<i-menu-item name="3-1">Add and start</i-menu-item>
					<i-menu-item name="3-2">Active analysis</i-menu-item>
					<i-menu-item name="3-3">Time Analysis</i-menu-item>
				</i-menu-group>
				<i-menu-group title="Keep it">
					<i-menu-item name="3-4">User retention</i-menu-item>
					<i-menu-item name="3-5">Drain user</i-menu-item>
				</i-menu-group>
			</i-submenu>
		</i-menu>
	</demo-wrapper>
</template>

<script>
module.exports = {
	data: function() {
		return {
			model: {
				mode: {
					list: ["horizontal", "vertical"],
					value: "horizontal",
				},
				theme: {
					list: ["light", "dark", "primary"],
					value: "light",
				},
				width: {
					list: ["50%", "100%"],
					value: "100%",
				},
			},
		};
	},
}
</script>
