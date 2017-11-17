<style>
.demo-carousel {
    height: 200px;
    line-height: 200px;
    text-align: center;
    color: #fff;
    font-size: 20px;
    background: #506b9e;
}
</style>

<template>
	<demo-wrapper>
		<i-carousel :arrow="model.arrow.value" :autoplay="model.autoplay.value"
				:autoplaySpeed="model.autoplaySpeed.value" :dots="model.dots.value"
				:radiusDot="model.radiusDot.value" :trigger="model.trigger.value">
			<i-carousel-item>
				<div class="demo-carousel">1</div>
			</i-carousel-item>
			<i-carousel-item>
				<div class="demo-carousel">2</div>
			</i-carousel-item>
			<i-carousel-item>
				<div class="demo-carousel">3</div>
			</i-carousel-item>
		</i-carousel>
	</demo-wrapper>
</template>

<script>
module.exports = {
	data: function() {
		return {
			model: {
				arrow: {
					list: ["hover", "always", "never"],
					value: "hover",
				},
				autoplay: {
					list: [true, false],
					value: false,
				},
				autoplaySpeed: {
					list: [1000, 2000, 4000],
					value: 2000,
				},
				dots: {
					list: ["inside", "outside", "none"],
					value: "inside",
				},
				radiusDot: {
					list: [true, false],
					value: false,
				},
				trigger: {
					list: ["click", "hover"],
					value: "click",
				},
			},
		};
	},
}
</script>
