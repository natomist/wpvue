<template>
	<demo-wrapper align="center">
		<div class="text-center">
			<i-button :type="model.type.value" :shape="model.shape.value"
					:icon="model.icon.value" :size="model.size.value"
					:long="model.long.value" :disabled="model.disabled.value">
				<span v-if="model.shape.value == null || model.icon.value == null">
					Search
				</span>
			</i-button>
		</div>
		<div class="text-center">
			<i-button-group>
				<i-button :type="model.type.value" :shape="model.shape.value"
						:icon="model.icon.value" :size="model.size.value" 
						:disabled="model.disabled.value">
					<span v-if="model.shape.value == null || model.icon.value == null">
						Confirm
					</span>
				</i-button>
				<i-button :size="model.size.value">Cancel</i-button>
			</i-button-group>
		</div>
	</demo-wrapper>
</template>

<script>
module.exports = {
	data: function() {
		return {
			model: {
				type: {
					list: ["default", "primary", "ghost", "dashed", "text", "info", "success", "warning", "error"],
					value: "primary",
				},
				shape: {
					list: [null, "circle"],
					value: null,
				},
				icon: {
					list: [null, "ios-search"],
					value: null,
				},
				size: {
					list: ["small", "large", "default"],
					value: "default",
				},
				long: {
					list: [true, false],
					value: false,
				},
				disabled: {
					list: [true, false],
					value: false,
				},
			},
		};
	},
}
</script>
