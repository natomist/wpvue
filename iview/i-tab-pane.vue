<template>
	<div class="ivu-tabs-tabpane" v-show="show">
		<slot />
	</div>
</template>

<script>
//Vue.component('i-tabs');
module.exports = {
	props: {
		name: {
			type: String
		},
		label: {
			type: [String, Function],
			default: ''
		},
		icon: {
			type: String
		},
		disabled: {
			type: Boolean,
			default: false
		},
		closable: {
			type: Boolean,
			default: null
		}
	},
	computed: {
		tabs: function() {
			return this.getParent('i-tabs');
		},
		show: function() {
			if( this.tabs == null ) {
				return;
			}
			return this.tabs.activeTab == this.name;
		},
	},
	mounted: function() {
		if( this.tabs == null ) {
			return;
		}
		this.tabs.tabs.push(this);
		if( this.tabs.activeTab == null ) {
			this.tabs.activeTab = this.name;
		}
	},
	destroyed: function() {
		if( this.tabs == null ) {
			return;
		}
		var self = this;
		this.tabs.tabs.filter(function(value) {
			return value != self;
		});
	}
};
</script>
