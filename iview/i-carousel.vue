<style>
@carousel-prefix-cls: ~"@{css-prefix}carousel";
@carousel-item-prefix-cls: ~"@{css-prefix}carousel-item";

@keyframes @{carousel-prefix-cls}-right-in {
	from {
		transform: translate(-100%, 0);
	}

	to {
		transform: translate(0, 0);
	}
}

@keyframes @{carousel-prefix-cls}-right-out {
	from {
		transform: translate(0, 0);
	}

	to {
		transform: translate(100%, 0);
	}
}

@keyframes @{carousel-prefix-cls}-left-in {
	from {
		transform: translate(100%, 0);
	}

	to {
		transform: translate(0, 0);
	}
}

@keyframes @{carousel-prefix-cls}-left-out {
	from {
		transform: translate(0, 0);
	}

	to {
		transform: translate(-100%, 0);
	}
}

.@{carousel-prefix-cls} {
	position: relative;
	display: block;
	box-sizing: border-box;
	user-select: none;
	touch-action: pan-y;
	-webkit-tap-highlight-color: transparent;

	&-list {
		position: relative;
		display: block;
		overflow: hidden;

		margin: 0;
		padding: 0;
	}

	&-track {
		position: relative;
		top: 0;
		left: 0;
		display: block;

		overflow: hidden;

		.@{carousel-item-prefix-cls} {
			position: absolute;
			left: 0;
			right: 0;
			top: 0;
			bottom: 0;
			//z-index: 0;
			visibility: hidden;

			&:first-child {
				position: relative;
			}

			animation-duration: 500ms;
			animation-fill-mode: both;

			&.in {
				animation-name: ~"@{carousel-prefix-cls}-left-in";
				//z-index: 1;
				visibility: visible;
			}

			&.out {
				animation-name: ~"@{carousel-prefix-cls}-left-out";
				//z-index: 1;
				visibility: visible;
			}

			&.reverse {
				&.in {
					animation-name: ~"@{carousel-prefix-cls}-right-in";
				}

				&.out {
					animation-name: ~"@{carousel-prefix-cls}-right-out";
				}
			}

			&.paused {
				animation-name: none !important;
			}
		}
	}

	&-arrow {

		border: none;
		outline: none;

		padding: 0;
		margin: 0;

		width: 36px;
		height: 36px;
		border-radius: 50%;

		cursor: pointer;

		display: none;

		position: absolute;
		top: 50%;
		z-index: 10;
		transform: translateY(-50%);

		transition: @transition-time;
		background-color: rgba(31, 45, 61, .11);
		color: #fff;

		&:hover {
			background-color: rgba(31, 45, 61, 0.5);
		}

		text-align: center;
		font-size: 1em;

		font-family: inherit;
		line-height: inherit;

		& > * {
			vertical-align: baseline;
		}

		&.left {
			left: 16px;
		}

		&.right {
			right: 16px;
		}

		&-always {
			display: inherit;
		}

		&-hover {
			display: inherit;

			opacity: 0;
		}
	}

	&:hover &-arrow-hover {
		opacity: 1;
	}

	&-dots {
		z-index: 10;

		@padding: 7px;

		display: none;

		position: relative;
		&-inside {
			display: block;
			position: absolute;
			bottom: 10px - @padding;
		}

		&-outside {
			display: block;
			margin-top: 10px - @padding;
		}

		list-style: none;

		text-align: center;

		padding: 0;
		width: 100%;
		height: 3px + @padding * 2;

		li {
			position: relative;
			display: inline-block;

			vertical-align: top;
			text-align: center;

			margin: 0 2px;
			padding: @padding 0;

			cursor: pointer;

			button {
				border: 0;
				cursor: pointer;

				background: #8391a5;
				opacity: 0.3;

				display: block;
				width: 16px;
				height: 3px;

				border-radius: 1px;
				outline: none;

				font-size: 0;
				color: transparent;

				transition: all .5s;
				&.radius {
					width: 6px;
					height: 6px;
					border-radius: 50%;
				}
			}

			&:hover > button {
				opacity: 0.7;
			}

			&.@{carousel-prefix-cls}-active > button {
				opacity: 1;
				width: 24px;
				&.radius{
					width: 6px;
				}
			}
		}
	}
}
</style>

<template>
	<div class="ivu-carousel">
		<button :class="arrowClasses" class="left" @click="onLeft">
			<i-icon type="chevron-left" />
		</button>
		<div class="ivu-carousel-list">
			<div class="ivu-carousel-track">
				<slot/>
			</div>
		</div>
		<button :class="arrowClasses" class="right" @click="onRight">
			<i-icon type="chevron-right" />
		</button>
		<ul :class="dotsClasses">
			<template v-for="n in numberSlides">
				<li :class="{ 'ivu-carousel-active': n-1 == activeSlide }"
					@click="onDotClick" @mousemove="onDotMove" :data-number="n-1">
					<button :class="{ 'radius': radiusDot }" 
						 />
				</li>
			</template>
		</ul>
	</div>
</template>

<script>
//Vue.component('i-icon');
module.exports = {
	props: {
		arrow: {
			type: String,
			default: 'hover',
			validator (value) {
				return oneOf(value, ['hover', 'always', 'never']);
			}
		},
		autoplay: {
			type: Boolean,
			default: false
		},
		autoplaySpeed: {
			type: Number,
			default: 2000
		},
		loop: {
			type: Boolean,
			default: false
		},
		easing: {
			type: String,
			default: 'ease'
		},
		dots: {
			type: String,
			default: 'inside',
			validator (value) {
				return oneOf(value, ['inside', 'outside', 'none']);
			}
		},
		radiusDot: {
			type: Boolean,
			default: false
		},
		trigger: {
			type: String,
			default: 'click',
			validator (value) {
				return oneOf(value, ['click', 'hover']);
			}
		},
		value: {
			type: Number,
			default: 0
		},
	},
	data: function() {
		return {
			numberSlides: 0,
			activeSlide: 0,
			oldActiveSlide: -1,
			right: false,
			timeoutID: -1,
		};
	},
	computed: {
		name: function() {
			return 'carousel';
		},
		arrowClasses: function() {
			return [
				'ivu-carousel-arrow',
				'ivu-carousel-arrow-' + this.arrow
			];
		},
		dotsClasses: function() {
			return [
				'ivu-carousel-dots',
				'ivu-carousel-dots-' + this.dots
			];
		},
	},
	methods: {
		onDotClick: function(event) {
			var number = parseInt(event.currentTarget.getAttribute('data-number'));
			if( number == this.activeSlide ) {
				return;
			}
			this.activeSlide = number;
			this.right = this.activeSlide > this.oldActiveSlide;
			this.autoplay = false;
		},
		onDotMove: function(event) {
			if( this.trigger == 'click' ) {
				return false;
			}
			this.onDotClick(event);
		},
		onLeft: function() {
			this.right = false;
			this.activeSlide = (this.numberSlides + this.activeSlide - 1) % this.numberSlides;
			this.autoplay = false;
		},
		onRight: function(auto) {
			this.right = true;
			this.activeSlide = (this.activeSlide + 1) % this.numberSlides;
			if( auto != true ) {
				this.autoplay = false;
			}
		},
		timeout: function(next) {
			this.timeoutID = -1;

			if( next && this.autoplay ) {
				this.onRight(true);
			}

			var self = this;
			this.timeoutID = window.setTimeout(function() {
				self.timeout(true);
			}, this.autoplaySpeed);
		}
	},
	watch: {
		activeSlide: function(val, oldVal) {
			if( val == oldVal ) {
				return;
			}
			this.oldActiveSlide = oldVal;
		},
	},
	mounted: function() {
		this.timeout(false);
	},
};
</script>
