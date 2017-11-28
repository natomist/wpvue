<template>
	<li :class="classes" @click="click"><slot /></li>
</template>

<script>
//Vue.component('i-dropdown')
module.exports = {
	props: {
		name: {
			type: [String, Number]
		},
		disabled: {
			type: Boolean,
			default: false
		},
		selected: {
			type: Boolean,
			default: false
		},
		divided: {
			type: Boolean,
			default: false
		}
	},
	computed: {
		dropdown: function() {
			return this.getParent('i-dropdown');
		},
		classes: function() {
			return {
				"ivu-dropdown-item": true,
				"ivu-dropdown-item-disabled": this.disabled,
				"ivu-dropdown-item-selected": this.dropdown.activeValue == this.name,
				"ivu-dropdown-item-divided": this.divided
			};
		},
	},
	methods: {
		click: function() {
			if( this.disabled || !this.dropdown || this.name == null ) {
				return;
			}
			this.dropdown.activeValue = this.name;
		}
	}
};
</script>
