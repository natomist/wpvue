<template>
	<div :class="classes"><slot /></div> 
</template>

<script>
//Vue.component('i-carousel');
module.exports = {
	data () {
		return {
			number: -1,
		};
	},
	computed: {
		carousel: function() {
			var parent = this.$parent;
			while( parent ) {
				if( parent.name == 'carousel' ) {
					return parent;
				}
				parent = parent.$parent;
			}
			return parent;
		},
		classes: function() {
			return {
				'ivu-carousel-item': true,
				'in': this.carousel.activeSlide == this.number,
				'out': this.carousel.oldActiveSlide == this.number,
				'reverse': !this.carousel.right,
				'paused': this.carousel.oldActiveSlide == -1,
			}
		},
	},
	mounted () {
		this.number = this.carousel.numberSlides;
		this.carousel.numberSlides++;
	},
	beforeDestroy: function() {
		this.carousel.numberSlides--;
	}
};
</script>
