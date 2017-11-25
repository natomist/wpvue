
<template>
	<demo-wrapper>
		<i-tabs v-model="model.value.value"
				:type="model.type.value"
				:size="model.size.value">
			<i-tab-pane label="macOS" name="mac" icon="social-apple">
				Content of tab 1
			</i-tab-pane>
			<i-tab-pane label="Windows" name="win" icon="social-windows"
					:disabled="true">
				Content of tab 2
			</i-tab-pane>
			<i-tab-pane label="Linux" name="linux" icon="social-tux">
				Content of tab 3
			</i-tab-pane>
		</i-tabs>
	</demo-wrapper>
</template>

<script>
module.exports = {
	data: function() {
		return {
			model: {
				value: {
					list: ["mac", "win", "linux"],
					value: "mac",
				},
				type: {
					list: ["line", "card"],
					value: "line",
				},
				size: {
					list: ["small", "default"],
					value: "default",
				},
			}
		};
	},
}
</script>
