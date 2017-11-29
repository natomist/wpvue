<style>
@select-dropdown-prefix-cls: ~"@{css-prefix}select-dropdown";
//@transfer-no-max-height: ~"@{css-prefix}transfer-no-max-height";

@dropdown-prefix-cls: ~"@{css-prefix}dropdown";
@dropdown-item-prefix-cls: ~"@{dropdown-prefix-cls}-item";

.@{dropdown-prefix-cls} {
	display: inline-block;
	position: relative;

	.@{select-dropdown-prefix-cls} {
		overflow: visible;
		max-height: none;
	}
	.@{dropdown-prefix-cls} {
		width: 100%;
	}

	&-rel{
		position: relative;
	}

	//&-menu{
	//	min-width: 100px;
	//}

	//&-transfer{
	//	width: auto;
	//}

	.@{select-dropdown-prefix-cls} {
		display: none;
		right: 0;
		overflow: auto;
		margin: 0px 0;
		padding: 5px 0;
		background-color: #fff;
		box-sizing: border-box;
		border-radius: @btn-border-radius;
		box-shadow: @shadow-base;
		position: absolute;
		z-index: @zindex-select;
		//&-transfer{
		//	z-index: @zindex-transfer;
		//}
		//&.@{transfer-no-max-height} {
		//	max-height: none;
		//}
	}

	&.ivu-dropdown-hover:hover, &.ivu-dropdown-active {
		.@{select-dropdown-prefix-cls} {
			display: block;
		}
	}

}

.select-item(@dropdown-prefix-cls, @dropdown-item-prefix-cls);
</style>

<template>
	<div class="ivu-dropdown" :class="classes">
		<div class="ivu-dropdown-rel" @click="click">
			<slot name="value" />
		</div>
		<div class="ivu-select-dropdown">
			<ul class="ivu-dropdown-menu"><slot /></ul>
		</div>
	</div>
</template>

<script>
//Vue.component('i-style');
module.exports = {
	props: {
		value: {
			type: [String, Number]
		},
		trigger: {
			validator (value) {
				return oneOf(value, ["click", "hover"]);
			},
			default: "hover",
		},
	},
	computed: {
		name: function() {
			return 'i-dropdown';
		},
		classes: function() {
			return {
				"ivu-dropdown-hover": this.trigger == "hover",
				"ivu-dropdown-active": this.active,
			};
		},
	},
	data: function() {
		return {
			activeValue: this.value,
			active: false,
		};
	},
	methods: {
		click: function(event) {
			if( this.trigger != 'click' ) {
				return;
			}
			event.stopPropagation();
			var self = this;
			self.active = true;
			addEventListener("click", function(event) {
				self.active = false;
				removeEventListener(event.type, arguments.callee);
			});
		},
	},
	watch: {
		'value': function(value) {
			this.activeValue = value;
		},
		'activeValue': function(value) {
			this.$emit('input', value);
		},
	},
};
</script>
