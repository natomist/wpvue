<template>
	<demo-wrapper>
		<i-card :bordered="model.bordered.value" :disHover="model.disHover.value"
			:shadow="model.shadow.value" :padding="model.padding.value">
			<div slot="title">Title</div>
			<div slot="extra">Extra</div>
			<div>Content</div>
		</i-card>
	</demo-wrapper>
</template>

<script>
module.exports = {
	data: function() {
		return {
			model: {
				bordered: {
					list: [true, false],
					value: true,
				},
				disHover: {
					list: [true, false],
					value: false,
				},
				shadow: {
					list: [true, false],
					value: false,
				},
				padding: {
					list: [8, 16, 32],
					value: 16,
				},
			},
		};
	},
}
</script>
