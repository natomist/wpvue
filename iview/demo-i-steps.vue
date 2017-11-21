<template>
	<demo-wrapper>
		<i-steps :current="model.current.value" 
				:status="model.status.value"
				:size="model.size.value"
				:direction="model.direction.value" @onselect="onselect"
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
					list: [1, 2, 3],
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
	methods: {
		onselect: function(value) {
			console.log(value);
		}
	}
}
</script>
