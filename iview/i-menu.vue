<style>
@menu-prefix-cls: ~"@{css-prefix}menu";
@menu-dropdown-item-prefix-cls: ~"@{menu-prefix-cls}-horizontal .@{menu-prefix-cls}-submenu .@{select-dropdown-prefix-cls} .@{menu-prefix-cls}-item";
@select-dropdown-prefix-cls: ~"@{css-prefix}select-dropdown";

.@{menu-prefix-cls} {
	display: block;
	margin: 0;
	padding: 0;
	outline: none;
	list-style: none;
	color: @text-color;
	font-size: @font-size-base;
	position: relative;
	z-index: @zindex-select;

	&-horizontal{
		height: 60px;
		line-height: 60px;

		&.@{menu-prefix-cls}-light{
			&:after{
				content: '';
				display: block;
				width: 100%;
				height: 1px;
				background: @border-color-base;
				position: absolute;
				bottom: 0;
				left: 0;
			}
		}
	}
	&-vertical{
		&.@{menu-prefix-cls}-light{
			&:after{
				content: '';
				display: block;
				width: 1px;
				height: 100%;
				background: @border-color-base;
				position: absolute;
				top: 0;
				bottom: 0;
				right: 0;
				z-index: 1;
			}
		}
	}

	&-light{
		background: #fff;
	}
	&-dark{
		background: @menu-dark-title;
	}
	&-primary{
		background: @primary-color;
	}

	&-item{
		display: block;
		outline: none;
		list-style: none;
		font-size: @font-size-base;
		position: relative;
		z-index: 1;
		cursor: pointer;
		transition: all @transition-time @ease-in-out;
	}
	&-item > i{
		margin-right: 6px;
	}
	&-submenu-title > i, &-submenu-title span > i{
		margin-right: 8px;
	}

	&-horizontal &-item,
	&-horizontal &-submenu
	{
		float: left;
		padding: 0 20px;
		position: relative;
		cursor: pointer;
		z-index: 3;
		transition: all @transition-time @ease-in-out;
	}

	&-light&-horizontal &-item, &-light&-horizontal &-submenu{
		height: inherit;
		line-height: inherit;
		border-bottom: 2px solid transparent;
		color: @text-color;
		&-active, &:hover{
			color: @primary-color;
			border-bottom: 2px solid @primary-color;
		}
	}

	&-dark&-horizontal &-item, &-dark&-horizontal &-submenu{
		color: @menu-dark-subsidiary-color;
		&-active, &:hover{
			color: #fff;
		}
	}

	&-primary&-horizontal &-item, &-primary&-horizontal &-submenu{
		color: #fff;
		&-active, &:hover{
			background: @link-active-color;
		}
	}

	&-horizontal &-submenu .@{select-dropdown-prefix-cls} {
		min-width: 100%;
		//width: auto;
		//max-height: none;
		.@{menu-prefix-cls}-item{
			height: auto;
			line-height: normal;
			border-bottom: 0;
			float: none;
		}

		transition: all @transition-time @ease-in-out;
		max-height: 0;
		overflow: hidden;
		opacity: 0;
    background-color: #fff;
    border-radius: @btn-border-radius;
    box-shadow: @shadow-base;
    width: inherit;
    position: absolute;
    z-index: @zindex-select;
		left: 0;
		top: 100%;
    margin: 5px 0;
    padding: 5px 0;

		&.ivu-select-dropdown-opened {
			max-height: 100vh;
			opacity: 1;
		}
	}

	&-item-group{
		line-height: normal;
		&-title {
			height: 30px;
			line-height: 30px;
			padding-left: 8px;
			font-size: @font-size-small;
			color: @legend-color;
		}

		& > ul{
			padding: 0 !important;
			list-style: none !important;
		}
	}

	// vertical
	&-vertical &-item,
	&-vertical &-submenu-title
	{
		padding: 14px 24px;
		position: relative;
		cursor: pointer;
		z-index: 1;
		transition: all @transition-time @ease-in-out;

		&:hover{
			background: @background-color-select-hover;
		}
	}

	&-vertical &-submenu-title-icon{
		float: right;
		position: relative;
		top: 4px;
	}
	&-submenu-title-icon {
		transition: transform @transition-time @ease-in-out;
	}
	&-opened &-submenu-title-icon{
		transform: rotate(180deg);
	}

	&-vertical &-submenu &-item{
		padding-left: 43px;
	}
	&-vertical &-item-group{
		&-title{
			height: 48px;
			line-height: 48px;
			font-size: @font-size-base;
			padding-left: 28px;
		}
	}
	&-dark&-vertical &-item-group{
		&-title{
			color: @menu-dark-group-title-color;
		}
	}

	&-light&-vertical &-item{
		border-right: 2px solid transparent;
		&-active:not(.@{menu-prefix-cls}-submenu){
			color: @primary-color;
			border-right: 2px solid @primary-color;
			z-index: 2;
		}
	}

	&-dark&-vertical &-item, &-dark&-vertical &-submenu-title{
		color: @menu-dark-subsidiary-color;
		&-active:not(.@{menu-prefix-cls}-submenu),
		&-active:not(.@{menu-prefix-cls}-submenu):hover
		{
			background: @menu-dark-active-bg;
		}
		&:hover{
			color: #fff;
			background: @menu-dark-title;
		}
		&-active:not(.@{menu-prefix-cls}-submenu){
			color: @primary-color;
			border-right: 2px solid @primary-color;
		}
	}
	&-dark&-vertical &-submenu &-item{
		&:hover{
			color: #fff;
			background: transparent !important;
		}
		&-active,&-active:hover{
			border-right: none;
			color: #fff;
			background: @primary-color !important;
		}
	}
	&-dark&-vertical &-item-active &-submenu-title{
		color: #fff;
	}

	&-dark&-vertical &-opened{
		background: @menu-dark-active-bg;
		.@{menu-prefix-cls}-submenu-title{
			background: @menu-dark-title;
		}
	}
}
.select-item(@menu-prefix-cls, @menu-dropdown-item-prefix-cls);

.@{menu-dropdown-item-prefix-cls} {
	padding: 7px 16px 8px;
	font-size: @font-size-base !important;
}
</style>

<template>
	<ul :class="classes" :style="styles"><slot /></ul>
</template>

<script>
//Vu.component('i-button');
//Vu.component('i-select-dropdown');
//Vue.component('i-style');
module.exports = {
	props: {
		mode: {
			validator (value) {
				return oneOf(value, ['horizontal', 'vertical']);
			},
			default: 'vertical'
		},
		theme: {
			validator (value) {
				return oneOf(value, ['light', 'dark', 'primary']);
			},
			default: 'light'
		},
		activeName: {
			type: [String, Number]
		},
		width: {
			type: String,
			default: '240px'
		}
	},
	data: function() {
		return {
			currentActiveName: this.activeName,
		};
	},
	computed: {
		name: function() {
			return 'i-menu';
		},
		classes: function() {
			var theme = this.theme;
			if( this.mode == 'vertical' && this.theme == 'primary' ) {
				theme = 'light';
			}

			var obj = {};
			obj['ivu-menu-' + this.mode] = this.mode;
			return [ 'ivu-menu', 'ivu-menu-' + theme, obj ];
		},
		styles: function() {
			var style = {};

			if (this.mode == 'vertical') {
				style.width = this.width;
			}

			return style;
		},
	},
};
</script>
