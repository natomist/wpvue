<template>
	<li :class="classes" @click.stop="onclick"><slot /></li>
</template>

<script>
//Vue.component('i-menu');
module.exports = {
	props: {
		name: {
			type: [String, Number],
			required: true
		},
		disabled: {
			type: Boolean,
			default: false
		}
	},
	computed: {
		classes: function() {
			var ret = [ 'ivu-menu-item' ];
			if( this.active ) {
				ret.push('ivu-menu-item-active');
			}
			if( this.active ) {
				ret.push('ivu-menu-item-selected');
			}
			if( this.disabled ) {
				ret.push('ivu-menu-item-disabled');
			}
			return ret;
		},
		parent: function() {
			var parent = this.$parent;
			while( parent ) {
				if( parent.name == 'i-menu' ) {
					return parent;
				}
				parent = parent.$parent;
			}
			return null;
		},
		active: function() {
			if( this.parent == null ) {
				return false;
			}
			return this.parent.currentActiveName == this.name;
		}
	},
	methods: {
		onclick: function() {
			if (this.disabled) {
				return;
			}
			if( this.parent != null ) {
				this.parent.currentActiveName = this.name;
				this.parent.$emit('on-select', this.name);
				this.$emit('on-select', this.name);
			}
		},
		submenu: function() {
			var parent = this.$parent;
			while( parent ) {
				if( parent.name == 'i-submenu' ) {
					return parent;
				}
				parent = parent.$parent;
			}
			return null;
		},
	},
	mounted: function() {
		var submenu = this.submenu();
		if( submenu ) {
			submenu.child.push(this.name);
		}
	},
	beforeDestroy: function() {
		var submenu = this.submenu();
		var self = this;
		if( submenu ) {
			submenu.child.filter(function(item) {
				return item != self.name;
			});
		}
	},
};
</script>
