<style>
@input-prefix-cls: ~"@{css-prefix}input";

.@{input-prefix-cls} {
	.input;
	&-wrapper{
		display: inline-block;
		width: 100%;
		position: relative;
		vertical-align: middle;

		// #2149 & #2219
		line-height: normal
	}
	&-icon {
		width: 32px;
		height: @input-height-base;
		line-height: @input-height-base;
		font-size: 16px;
		text-align: center;
		color: @subsidiary-color;
		position: absolute;
		right: 0;
		z-index: 3;
	}
	&-hide-icon &-icon{
		display: none;
	}
	&-icon-validate{
		display: none;
	}

	&-icon-normal + &{
		padding-right: 32px;
	}
	// #554
	&-hide-icon &-icon-normal + &{
		padding-right: @input-padding-horizontal;
	}

	&-wrapper-large &-icon{
		font-size: 18px;
		height: @input-height-large;
		line-height: @input-height-large;
	}
	&-wrapper-small &-icon{
		width: 24px;
		font-size: 14px;
		height: @input-height-small;
		line-height: @input-height-small;
	}
}

.@{input-prefix-cls}-group{
	.input-group(~"@{input-prefix-cls}");
	border-spacing: 0;
}

.@{form-item-prefix-cls}-error{
	.@{input-prefix-cls}{
		.input-error;
		&-icon{
			color: @error-color;
		}
	}
	.@{input-prefix-cls}-group{
		.input-group-error;
	}
}
.@{form-item-prefix-cls}-validating{
	.@{input-prefix-cls}{
		&-icon-validate{
			display: inline-block;
		}
		&-icon + .@{input-prefix-cls}{
			padding-right: 32px;
		}
	}
}
</style>

<template>
	<div :class="wrapClasses">
		<div class="ivu-input-group-prepend" v-if="$slots.prepend">
			<slot name="prepend" />
		</div>
		<input class="ivu-input" :value="value" @input="change" />
		<div class="ivu-input-group-append" v-if="$slots.append">
			<slot name="append" />
		</div>
	</div>
</template>

<script>
//Vue.computed('i-form-item')
module.exports = {
	data: function() {
		return {
			prop: null,
			model: null,
		};
	},
	computed: {
		wrapClasses: function() {
			return {
				"ivu-input-wrapper": true,
				"ivu-input-group": this.$slots.prepend || this.$slots.append,
				"ivu-input-group-with-prepend": this.$slots.prepend,
				"ivu-input-group-with-append": this.$slots.append,
			};
		},
		value: function() {
			if( this.model && this.prop ) {
				return this.model[this.prop].value;
			}
			return '';
		}
	},
	methods: {
		change: function(value) {
			if( this.model && this.prop ) {
				Vue.set(this.model[this.prop], "value", value.target.value);
			}
		},
	},
	created: function() {
		var parent = this.$parent;
		while(parent) {
			if( parent.name == 'i-form-item' && parent.prop ) {
				this.prop = parent.prop;
				break;
			}
			parent = parent.$parent;
		}

		parent = this.$parent;
		while(parent) {
			if( parent.name == 'i-form' && parent.model ) {
				this.model = parent.model;
				break;
			}
			parent = parent.$parent;
		}
	},
}
</script>
