<template>
	<div :class="wrapClasses" :style="styles" @click="click">
		<div class="ivu-steps-tail"><i/></div>
		<div class="ivu-steps-head">
			<div class="ivu-steps-head-inner">
				<span v-if="!icon && currentStatus != 'finish' && currentStatus != 'error'">
					{{ stepNumber }}
				</span>
				<span v-else :class="iconClasses" />
			</div>
		</div>
		<div class="ivu-steps-main">
			<div class="ivu-steps-title">{{ title }}</div>
			<slot>
				<div v-if="content" class="ivu-steps-content">{{ content }}</div>
			</slot>
		</div>
	</div>
</template>

<script>
module.exports = {
	props: {
		title: {
			type: String,
			default: ''
		},
		content: {
			type: String
		},
		icon: {
			type: String
		},
	},
	created: function() {
		this.steps.steps.push(this);
	},
	beforeDestroy: function() {
		var self = this;
		this.steps.steps.filter(function(value) {
			return value != self;
		});
	},
	computed: {
		steps: function() {
			var parent = this.$parent;
			while( parent ) {
				if( parent.name == 'i-steps' ) {
					return parent;
				}
				parent = parent.$parent;
			}
			return null;
		},
		stepNumber: function() {
			if( this.steps == null ) {
				return null;
			}
			return this.steps.steps.indexOf(this)+1;
		},
		numberSteps: function() {
			if( this.steps == null ) {
				return 0;
			}
			return this.steps.steps.length;
		},
		currentStatus: function() {
			if( this.stepNumber > this.steps.current ) {
				return 'wait';
			} else if( this.stepNumber == this.steps.current ) {
				return this.steps.status;
			} else {
				return 'finish';
			}
		},
		wrapClasses: function() {
			var ret = ["ivu-steps-item", "ivu-steps-status-"+this.currentStatus];
			if( !!this.icon ) {
				ret.push("ivu-steps-custom");
			}
			return ret;
		},
		iconClasses: function() {
			var icon = '';

			if (this.icon) {
				icon = this.icon;
			} else {
				if (this.currentStatus == 'finish') {
					icon = 'ios-checkmark-empty';
				} else if (this.currentStatus == 'error') {
					icon = 'ios-close-empty';
				}
			}

			var ret = ["ivu-steps-icon", "ivu-icon"];
			if( icon != '' ) {
				ret.push("ivu-icon-" + icon);
			}
			return ret;
		},
		styles: function() {
			if( this.numberSteps == 0 ) {
				return null;
			}
			return {
				width: (100/this.numberSteps)+'%',
			};
		},
	},
	methods: {
		click: function() {
			this.steps.$emit("onselect", this.stepNumber);
		}
	},
};
</script>
