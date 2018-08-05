
<style>
.diff-images {
	margin: 0 auto;
	position: relative;
	user-select: none;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	overflow: hidden;

	img {
		width: 100%;
		display: block;

		user-drag: none; 
		user-select: none;
		-moz-user-select: none;
		-webkit-user-drag: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}

	.wrap {
		position: absolute;
		top: 0px;
		left: 0px;
		right: 0px;
		bottom: 0px;
	}

	.diff-images-left {
		position: absolute;
		top: 0;
		left: 0;
		bottom: 0;
		overflow: hidden;
		background-size: cover;
		background-position: 0px;
	}

	.diff-images-split {
		position: absolute;
		top: 0;
		bottom: 0;
		width: 1px;
		background: white;
	}

	svg {
		position: absolute;
		top: 50%;
		width: 2.5rem;
		margin-left: -1.25rem;
		margin-top: -1.25rem;
	}
}
</style>

<template>
	<div class="diff-images" @mousemove.stop.prevent="mousemove" 
			@touchmove.stop.prevent="touchmove" @mousedown.stop.prevent=""
			:style="{ 'max-width': maxWidth }">
		<img v-bind:src="right" @load="onload" ref="image" />
		<div class="wrap" />
		<div class="diff-images-left" :style="cssLeft"></div>
		<div class="diff-images-split" :style="cssSplit" />
		<svg-resize-horizontal v-bind:style="cssSplit" />
	</div>
</template>

<script>
module.exports = {
	props: [
		'left',
		'right',
	],
  data: function() {
    return {
			position: 50,
			maxWidth: '100px',
    }
  },
	computed: {
		cssLeft: function() {
			return { 
				width: this.position+'%',
				backgroundImage: 'url('+this.left+')',
			};
		},
		cssSplit: function() {
			return {
				left: this.position+'%',
			};
		}
	},
	methods: {
		onload: function() {
			this.$emit('load');

			var imgWidth = this.$refs.image.naturalWidth;
			var imgHeight = this.$refs.image.naturalHeight;
			this.maxWidth = (imgWidth * (window.innerHeight * 0.7) / imgHeight)+'px';
		},
		updateX: function(clientX, event) {
			var rect = event.currentTarget.getBoundingClientRect();
			if( clientX < rect.left || clientX > rect.right ) {
				return;
			}
			this.position = (clientX-rect.left)*100/(rect.right-rect.left);
		},
		mousemove: function(event) {
			var webkit = 'WebkitAppearance' in document.documentElement.style;
			if( (webkit ? event.which : event.buttons) == 0 ) {
				return;
			}
			this.updateX( event.clientX, event );
		},
		touchmove: function(event) {
			if( event.targetTouches.length != 1 ) {
				return;
			}
			this.updateX( event.targetTouches[0].clientX, event );
		},
	},
}
</script>

