<template>
	<demo-wrapper>
		<i-page 
			v-model="model.value.value" 
			:mini="model.mini.value" 
			:total="model.value.list[model.value.list.length-1]" 
			:showLastPage="model.showLastPage.value" 
		/>
	</demo-wrapper>
</template>

<script>
//Vue.component('i-page');
module.exports = {
	data: function() {
		return {
			model: {
				value: {
					list: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
					value: 1,
				},
				mini: {
					list: [true, false],
					value: false,
				},
				showLastPage: {
					list: [true, false],
					value: true,
				},
			}
		};
	},
}
</script>
