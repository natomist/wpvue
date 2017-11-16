<template>
	<div :class="classes">
		<slot />
	</div>
</template>

<script>
//Vue.contant('i-button');
module.exports = {
	props: {
		size: {
			validator (value) {
				return oneOf(value, ['small', 'large', 'default']);
			}
		},
		shape: {
			validator (value) {
				return oneOf(value, ['circle', 'circle-outline']);
			}
		},
		vertical: {
			type: Boolean,
			default: false
		},
	},
	computed: {
		classes: function() {
			var ret = [ 'ivu-btn-group' ];
			if( !!this.size ) {
				ret.push('ivu-btn-group' + '-' + this.size);
			}
			if( !!this.shape ) {
				ret.push('ivu-btn-group' + '-' + this.shape);
			}
			if( this.vertical ) {
				ret.push('ivu-btn-group' + '-vertical');
			}
			return ret;
		},
	}
};
</script>
