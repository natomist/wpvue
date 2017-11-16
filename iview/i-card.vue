<style>
@shadow-card			: 0 1px 1px 0 rgba(0,0,0,.1);

@card-prefix-cls: ~"@{css-prefix}card";
.@{card-prefix-cls}{
	background: #fff;
	border-radius: @border-radius-small;
	font-size: @font-size-base;
	position: relative;
	//overflow: hidden;
	transition: all @transition-time @ease-in-out;

	&-bordered {
		border: 1px solid @border-color-base;
		border-color: @border-color-split;
	}

	&-shadow{
		box-shadow: @shadow-card;
	}

	&:hover {
		box-shadow: @shadow-base;
		border-color: #eee;
	}
	&&-dis-hover:hover{
		box-shadow: none;
		border-color: transparent;
	}

	&&-dis-hover&-bordered:hover{
		border-color: @border-color-split;
	}

	&&-shadow:hover{
		box-shadow: @shadow-card;
	}

	&-head {
		.content-header;
	}

	&-extra {
		position: absolute;
		right: 16px;
		top: 14px;
	}

	&-body {
		padding: 16px;
	}
}
</style>

<template>
	<div :class="classes">
		<div class="ivu-card-head" v-if="$slots.title"><slot name="title" /></div>
		<div class="ivu-card-extra" v-if="$slots.extra"><slot name="extra" /></div>
		<div class="ivu-card-body" :style="bodyStyles"><slot /></div>
	</div>
</template>

<script>
//Vue.component('i-style');
var defaultPadding = 16;

module.exports = {
	props: {
		bordered: {
			type: Boolean,
			default: true,
		},
		disHover: {
			type: Boolean,
			default: false,
		},
		shadow: {
			type: Boolean,
			default: false,
		},
		padding: {
			type: Number,
			default: defaultPadding,
		}
	},
	computed: {
		classes: function() {
			var ret = [ 'ivu-card' ];
			if( this.bordered && !this.shadow ) {
				ret.push('ivu-card-bordered');
			}
			if( this.disHover || this.shadow ) {
				ret.push('ivu-card-dis-hover');
			}
			if( this.shadow ) {
				ret.push('ivu-card-shadow');
			}
			return ret;
		},
		bodyStyles: function() {
			if (this.padding != defaultPadding) {
				return {
					padding: this.padding+'px',
				};
			} else {
				return '';
			}
		},
	},
};
</script>
