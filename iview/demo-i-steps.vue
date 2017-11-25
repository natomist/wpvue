<template>
	<demo-wrapper>
		<i-steps v-model="model.current.value" 
				:status="model.status.value"
				:size="model.size.value"
				:direction="model.direction.value"
		>
			<i-step title="Step 1" content="Cart" icon="ios-cart" />
			<i-step title="Step 2" content="Address" />
			<i-step title="Step 3" content="Payment" icon="map" />
		</i-steps>
	</demo-wrapper>
</template>

<script>
module.exports = {
	data: function() {
		return {
			model: {
				current: {
					list: [0, 1, 2],
					value: 1,
				},
				status: {
					list: ["wait", "process", "finish", "error"],
					value: "process",
				},
				size: {
					list: ["small", null],
					value: null,
				},
				direction: {
					list: ["horizontal", "vertical"],
					value: "horizontal",
				},
			},
		};
	},
}
</script>
