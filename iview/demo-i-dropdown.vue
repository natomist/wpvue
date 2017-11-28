<template>
	<demo-wrapper>
		<i-dropdown 
			:trigger="model.trigger.value"
			v-model="model.value.value"
		>
			<i-button slot="value" type="text">
				menu
				<i-icon type="arrow-down-b" />
			</i-button>
			<i-dropdown-item :name="0">Monday</i-dropdown-item>
			<i-dropdown-item :name="1">Tuesday</i-dropdown-item>
			<i-dropdown-item :name="2">Wednesday</i-dropdown-item>
			<i-dropdown-item :name="3">Thursday</i-dropdown-item>
			<i-dropdown-item :name="4">Friday</i-dropdown-item>
			<i-dropdown-item :name="5" divided>Saturday</i-dropdown-item>
			<i-dropdown-item :name="6" selected>Sunday</i-dropdown-item>
		</i-dropdown>
	</demo-wrapper>
</template>

<script>
module.exports = {
	data: function() {
		return {
			model: {
				value: {
					list: [0, 1, 2, 3, 4, 5, 6],
					value: 0,
				},
				trigger: {
					list: ["hover", "click"],
					value: "hover",
				},
			},
		};
	},
}
</script>
