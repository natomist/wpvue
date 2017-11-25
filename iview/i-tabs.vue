<style>
@tabs-prefix-cls: ~"@{css-prefix}tabs";

.@{tabs-prefix-cls} {
	box-sizing: border-box;
	position: relative;
	overflow: hidden;
	color: @text-color;
	.clearfix;

	&-bar {
		outline: none;
	}

	&-ink-bar {
		height: 2px;
		box-sizing: border-box;
		background-color: @primary-color;
		position: absolute;
		left: 0;
		bottom: 1px;
		z-index: 1;
		transition: transform .3s @ease-in-out;
		transform-origin: 0 0;
	}

	&-bar {
		border-bottom: 1px solid @border-color-base;
		margin-bottom: 16px;
	}

	&-nav-container {
		margin-bottom: -1px;
		line-height: @line-height-base;
		font-size: @font-size-base;
		box-sizing: border-box;
		white-space: nowrap;
		overflow: hidden;
		position: relative;
		.clearfix;
	}

	&-nav-container-scrolling {
		padding-left: 32px;
		padding-right: 32px;
	}

	&-nav-wrap {
		overflow: hidden;
		margin-bottom: -1px;
	}

	&-nav-scroll {
		overflow: hidden;
		white-space: nowrap;
	}

	&-nav-right{
		float: right;
		margin-left: 5px;
	}

	&-nav-prev{
		position:absolute;
		line-height: 32px;
		cursor: pointer;
		left:0;
	}

	&-nav-next{
		position:absolute;
		line-height: 32px;
		cursor: pointer;
		right:0;
	}

	&-nav-scrollable{
		padding: 0 12px;
	}

	&-nav-scroll-disabled{
		display: none;
	}

	&-nav {
		padding-left: 0;
		margin: 0;
		float: left;
		list-style: none;
		box-sizing: border-box;
		position: relative;
		transition: transform 0.5s @ease-in-out;

		&:before,
		&:after {
			display: table;
			content: " ";
		}

		&:after {
			clear: both;
		}

		.@{tabs-prefix-cls}-tab-disabled {
			pointer-events: none;
			cursor: default;
			color: #ccc;
		}

		.@{tabs-prefix-cls}-tab {
			display: inline-block;
			height: 100%;
			padding: 8px 16px;
			margin-right: 16px;
			box-sizing: border-box;
			cursor: pointer;
			text-decoration: none;
			position: relative;
			transition: color .3s @ease-in-out;

			&:hover {
				color: @link-hover-color;
			}

			&:active {
				color: @link-active-color;
			}
			.@{css-prefix-iconfont} {
				width: 14px;
				height: 14px;
				margin-right: 8px;
			}
		}

		.@{tabs-prefix-cls}-tab-active {
			color: @primary-color;
		}
	}
	&-mini &-nav-container {
		font-size: @font-size-base;
	}

	&-mini &-tab {
		margin-right: 0;
		padding: 8px 16px;
		font-size: @font-size-small;
	}

	& {
		.@{tabs-prefix-cls}-content-animated {
			display: flex;
			flex-direction: row;
			will-change: transform;
			transition: transform .3s @ease-in-out;
		}

		.@{tabs-prefix-cls}-tabpane {
			flex-shrink: 0;
			width: 100%;
			transition: opacity .3s;
			opacity: 1;
		}

		.@{tabs-prefix-cls}-tabpane-inactive {
			opacity: 0;
			height: 0;
		}
	}

	// card style
	&.ivu-tabs-card > .ivu-tabs-bar {
		margin: 0;
	}
	&&-card > &-bar &-nav-container {
		height: 32px;
	}
	&&-card > &-bar &-ink-bar {
		visibility: hidden;
	}
	&&-card > &-bar &-tab {
		margin: 0;
		margin-right: 4px;
		height: 31px;
		padding: 5px 16px 4px;
		border: 1px solid @border-color-base;
		border-bottom: 0;
		border-radius: @btn-border-radius @btn-border-radius 0 0;
		transition: all 0.3s @ease-in-out;
		background: @table-thead-bg;
	}
	&&-card > &-bar &-tab-active {
		height: 32px;
		padding-bottom: 5px;
		background: #fff;
		transform: translateZ(0);
		border-color: @border-color-base;
		color: @primary-color;
	}
	&&-card > &-bar &-nav-wrap {
		margin-bottom: 0;
	}
	&&-card > &-bar &-tab .@{css-prefix-iconfont}-ios-close-empty {
		width: 0;
		height: 22px;
		font-size: 22px;
		margin-right: 0;
		color: @legend-color;
		text-align: right;
		vertical-align: middle;
		overflow: hidden;
		position: relative;
		top: -1px;
		transform-origin: 100% 50%;
		transition: all 0.3s @ease-in-out;
		&:hover {
			color: #444;
		}
	}

	&&-card > &-bar &-tab-active .@{css-prefix-iconfont}-ios-close-empty,
	&&-card > &-bar &-tab:hover .@{css-prefix-iconfont}-ios-close-empty {
		width: 14px;
		transform: translateZ(0);
	}
}

.@{tabs-prefix-cls}-no-animation{
	> .@{tabs-prefix-cls}-content {
		transform: none!important;

		&.@{tabs-prefix-cls}-content-card {
			border-width: 0 1px 1px 1px;
			border-style: solid;
			border-color: @border-color-base;
		}

		> .@{tabs-prefix-cls}-tabpane-inactive {
			display: none;
		}
	}
}
</style>

<template>
	<div :class="classes">
		<div class="ivu-tabs-bar">
			<div class="ivu-tabs-nav-container">
				<div ref="navWrap" class="ivu-tabs-nav-wrap">
					<div ref="navScroll" class="ivu-tabs-nav-scroll">
						<div ref="nav" class="ivu-tabs-nav nav-text"><!-- :style="navStyle" -->
							<div v-for="(item, index) in tabs" :class="tabCls(item)" :data-index="index" @click="click">
								<i-icon v-if="item.icon" :type="item.icon" />
								<span>{{ item.label }}</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div :class="contentClasses"><slot /></div>
	</div>
</template>

<script>
//Vue.component('i-icon');
module.exports = {
	props: {
		value: {
			type: [String, Number]
		},
		type: {
			validator (value) {
				return oneOf(value, ['line', 'card']);
			},
			default: 'line'
		},
		size: {
			validator (value) {
				return oneOf(value, ['small', 'default']);
			},
			default: 'default'
		},
	},
	data: function() {
		return {
			activeTab: this.value,
			tabs: [],
		};
	},
	watch: {
		'value': function(value) {
			this.activeTab = value;
		},
		'activeTab': function(value) {
			this.$emit('input', value);
		},
	},
	computed: {
		name: function() {
			return 'i-tabs';
		},
		classes: function() {
			return {
				"ivu-tabs": true,
				"ivu-tabs-card": this.type == 'card',
				"ivu-tabs-mini": this.size == 'small' && this.type === 'line',
				"ivu-tabs-no-animation": !this.animated,
			};
		},
		contentClasses: function() {
			return {
				"ivu-tabs-content": true,
				"ivu-tabs-content-animated": this.animated,
				"ivu-tabs-content-card": this.type == 'card',
			};
		},
	},
	methods: {
		tabCls: function(item) {
			return {
				"ivu-tabs-tab": true,
				"ivu-tabs-tab-disabled": item.disabled,
				"ivu-tabs-tab-active": item.name == this.activeTab,
			};
		},
		click: function(event) {
			this.activeTab = this.tabs[parseInt(event.currentTarget.getAttribute('data-index'))].name;
		},
	},
};
</script>
