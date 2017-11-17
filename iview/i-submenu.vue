<template>
	<li :class="classes" @mouseenter="handleMouseenter" @mouseleave="handleMouseleave" @click="handClick">
		<div class="ivu-menu-submenu-title"> <!-- ref="reference" @click="handleClick" -->
			<slot name="title" />
			<i-icon type="ios-arrow-down" class="ivu-menu-submenu-title-icon" />
		</div>
		<template v-if="mode == 'vertical'">
			<ul class="ivu-menu" v-show="opened"><slot /></ul>
		</template>
		<template v-else>
			<div :class="{'ivu-select-dropdown': true, 'ivu-select-dropdown-opened': opened}">
				<ul class="ivu-menu-drop-list"><slot /></ul>
			</div>
		</template>
	</li>
</template>
<script>
//Vue.component('i-menu');
module.exports = {
	props: {
		disabled: {
			type: Boolean,
			default: false
		}
	},
	data: function() {
		return {
			opened: false,
			child: [],
			currentActiveNameUnwatch: null,
		};
	},
	computed: {
		name: function() {
			return 'i-submenu';
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
			var self = this;
			return this.child.reduce(function(prev, item) {
				return item == self.parent.currentActiveName ? true : prev;
			}, false);
		},
		classes: function() {
			return {
				"ivu-menu-submenu": true,
				"ivu-menu-item-active": this.active,
				"ivu-menu-opened": this.opened,
				"ivu-menu-submenu-disabled": this.disabled
			};
		},
		mode: function() {
			return this.parent.mode;
		},
		accordion: function() {
			return this.parent.accordion;
		},
	},
	methods: {
		handleMouseenter: function() {
			if( this.disabled || this.mode == 'vertical' ) {
				return;
			}

			this.opened = true;
		},
		handleMouseleave: function() {
			if( this.disabled || this.mode == 'vertical' ) {
				return;
			}

			this.opened = false;
		},
		handClick: function() {
			if( this.disabled || this.mode != 'vertical' ) {
				return;
			}

			this.opened = !this.opened;
		},
	},
	mounted: function() {
		this.currentActiveNameUnwatch = this.$watch( 
			function() { return this.parent.currentActiveName },
			function(newVal) { 
				if( this.active == false ) {
					this.opened = false;
				}
			}
		);
	},
	beforeDestroy: function() {
		this.currentActiveNameUnwatch();
	},
};
</script>
