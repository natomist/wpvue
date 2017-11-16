<template>
	<div :class="classes" :style="styles">
		<slot />
	</div>
</template>

<script>
//Vue.component('i-row')

module.exports = {
	props: {
		span: [Number, String],
		order: [Number, String],
		offset: [Number, String],
		push: [Number, String],
		pull: [Number, String],
		className: String,
		xs: [Number, Object],
		sm: [Number, Object],
		md: [Number, Object],
		lg: [Number, Object]
	},
	computed: {
		gutter: function() {
			if( this.$parent == null || this.$parent.gutter == null ) {
				return;
			}
			return this.$parent.gutter;
		},
		classes: function() {
			var classList = [ 'ivu-col' ];
			if( this.span ) {
				classList.push('ivu-col-span-' + this.span);
			}
			if( this.order ) {
				classList.push('ivu-col-order-' + this.order);
			}
			if( this.offset ) {
				classList.push('ivu-col-offset-' + this.offset);
			}
			if( this.push ) {
				classList.push('ivu-col-push-' + this.push);
			}
			if( this.pull ) {
				classList.push( 'ivu-col-pull-' + this.pull);
			}
			if( !!this.className ) {
				classList.push(this.className);
			}

			var size = ['xs', 'sm', 'md', 'lg'];
			for(var i = 0; i < size.length; i++) {
				if (typeof this[size[i]] == 'number') {
					classList.push( 'ivu-col-span-' + size[i] + '-' + this[size[i]] );
				} else if (typeof this[size[i]] == 'object') {
					var props = this[size[i]];
					for(var prop in props) {
						classList.push(
							prop != 'span'
								? 'ivu-col-' + size[i] + '-' + prop + '-' + props[prop]
								: 'ivu-col-span-' + size[i] + '-' + props[prop]
						);
					}
				}
			}

			return classList;
		},
		styles: function() {
			var style = {};
			if (this.gutter !== 0) {
				style = {
					paddingLeft: this.gutter / 2 + 'px',
					paddingRight: this.gutter / 2 + 'px'
				};
			}

			return style;
		},
	},
};
</script>
