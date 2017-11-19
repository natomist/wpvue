<template>
	<div :class="classes">
		<label class="ivu-form-item-label" v-if="label || $slots.label" :style="labelStyles">
			<slot name="label">{{ label }}</slot>
		</label>
		<div class="ivu-form-item-content" :style="contentStyles">
			<slot />
			<div class="ivu-form-item-error-tip" v-if="this.showError && typeof this.validate == 'string'">
				{{ this.validate }}
			</div>
		</div>
	</div>
</template>

<script>
module.exports = {
	props: {
		label: {
			type: String,
			default: ''
		},
		prop: {
			type: String
		},
	},
	data: function() {
		return {
			form: null,
			showError: true, // false,
			model: null,
		};
	},
	computed: {
		name: function() {
			return "i-form-item";
		},
		required: function() {
			if( !this.model || !this.prop || !this.model[this.prop] || !this.model[this.prop].require ) {
				return false;
			}
			return true;
		},
		validate: function() {
			if( !this.model || !this.prop || !this.model[this.prop] ) {
				return true;
			}
			var branch = this.model[this.prop];
			if( this.model[this.prop].require && this.model[this.prop].value.trim() == '' ) {
				return this.t("This field is mandatory") || "This field is mandatory";
			}
			if( !branch.validate || typeof branch.validate != "function" || !branch.value ) {
				return true;
			}
			return branch.validate.call(this.model, branch.value);
		},
		classes: function() {
			return {
					'ivu-form-item': true,
					'ivu-form-item-required': this.required || this.isRequired,
					'ivu-form-item-error': this.showError && this.validate != true,
					'ivu-form-item-validating': this.validateState == 'validating',
			};
		},
		labelStyles: function() {
			if( this.form == null || this.form.labelPosition == "top" ) {
				return null;
			}
			return { width: this.form.labelWidth };
		},
		contentStyles: function() {
			if( this.form == null || this.form.labelPosition == "top" ) {
				return null;
			}
			return { 'margin-left': this.form.labelWidth };
		},
	},
	methods: {
	},
	created: function() {
		parent = this.$parent;
		while(parent) {
			if( parent.name == 'i-form' && parent.model ) {
				this.model = parent.model;
				this.form = parent;
				this.labelWidth = parent.labelWidth;
				parent.fields.push(this);
				break;
			}
			parent = parent.$parent;
		}
	},
	beforeDestroy: function() {
		if( this.form == null ) {
			return;
		}
		var self = this;
		this.form.fields.filter(function(value) {
			return value != self;
		});
	}
};
</script>
