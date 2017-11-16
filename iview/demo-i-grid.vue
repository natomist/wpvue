<style>
.demo-grid {
	.col {
		background: rgba(0,153,229,.7);

		&.even {
			background: rgba(0,153,229,.9);
			height: 2rem;
		}
	}
}
</style>

<template>
	<demo-iview-wrapper class="demo-grid">
		<i-row :type="model.type.value" :align="model.align.value" 
				:justify="model.justify.value" :gutter="model.gutter.value">
			<i-col :span="12">
				<div class="col">
					1
				</div>
			</i-col>
			<i-col :span="12">
				<div class="col even">
					2
				</div>
			</i-col>
		</i-row>
		<i-row :type="model.type.value" :align="model.align.value" 
				:justify="model.justify.value" :gutter="model.gutter.value">
			<i-col :span="2" :push="1"><div class="col">1|push=1</div></i-col>
			<i-col :span="2" :offset="2"><div class="col even">2|offset=2</div></i-col>
			<i-col :span="2" :order="2"><div class="col">3|order=2</div></i-col>
			<i-col :span="2" :order="1"><div class="col even">4|order=1</div></i-col>
		</i-row>
		<i-row :type="model.type.value" :align="model.align.value" 
				:justify="model.justify.value" :gutter="model.gutter.value">
			<i-col :span="2" :xs="24" :sm="12" :md="6" :lg="3">
				<div class="col">
					span="2" xs="24" sm="12" md="6" lg="3"
				</div>
			</i-col>
		</i-row>
	</demo-iview-wrapper>
</template>

<script>
module.exports = {
	data: function() {
		return {
			model: {
				type: {
					list: ["flex", null],
					value: "flex",
				},
				align: {
					list: [null, "top", "middle", "bottom"],
					value: null,
				},
				justify: {
					list: [null, "start", "end", "center", "space-around", "space-between"],
					value: null,
				},
				gutter: {
					list: [0, 8, 16],
					value: 0,
				},
			},
		};
	},
}
</script>
