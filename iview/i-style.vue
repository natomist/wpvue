<style>
// Prefix
@css-prefix			 : ivu-;
@css-prefix-iconfont	: ivu-icon;

// Color
@primary-color		  : #2d8cf0;
@info-color			 : #2db7f5;
@success-color		  : #19be6b;
@warning-color		  : #ff9900;
@error-color			: #ed3f14;
@link-color			 : #2D8cF0;
@link-hover-color	   : tint(@link-color, 20%);
@link-active-color	  : shade(@link-color, 5%);
@selected-color		 : fade(@primary-color, 90%);
@tooltip-color		  : #fff;
@subsidiary-color	   : #80848f;
@rate-star-color		: #f5a623;

// Base
@body-background		: #fff;
@font-family			: "Helvetica Neue",Helvetica,"PingFang SC","Hiragino Sans GB","Microsoft YaHei","微软雅黑",Arial,sans-serif;
@code-family			: Consolas,Menlo,Courier,monospace;
@title-color			: #1c2438;
@text-color			 : #495060;
@font-size-base		 : 14px;
@font-size-small		: 12px;
@line-height-base	   : 1.5;
@line-height-computed   : floor((@font-size-base * @line-height-base));
@border-radius-base	 : 6px;
@border-radius-small	: 4px;
@cursor-disabled		: not-allowed;

// Border color
@border-color-base	  : #dddee1;  // outside
@border-color-split	 : #e9eaec;  // inside

// Background color
@background-color-base		: #f7f7f7;  // base
@background-color-select-hover: @input-disabled-bg;
@tooltip-bg				   : rgba(70, 76, 91, .9);
@head-bg					  : #f9fafc;
@table-thead-bg			   : #f8f8f9;
@table-td-stripe-bg		   : #f8f8f9;
@table-td-hover-bg			: #ebf7ff;
@table-td-highlight-bg		: #ebf7ff;
@menu-dark-title			  : #495060;
@menu-dark-active-bg		  : #363e4f;
@menu-dark-subsidiary-color   : rgba(255,255,255,.7);
@menu-dark-group-title-color  : rgba(255,255,255,.36);
@date-picker-cell-hover-bg	: #e1f0fe;

// Shadow
@shadow-color		   : rgba(0, 0, 0, .2);
@shadow-base			: @shadow-down;
@shadow-up			  : 0 -1px 6px @shadow-color;
@shadow-down			: 0 1px 6px @shadow-color;
@shadow-left			: -1px 0 6px @shadow-color;
@shadow-right		   : 1px 0 6px @shadow-color;

// Layout and Grid
@grid-columns		   : 24;
@grid-gutter-width	  : 0;

// Legend
@legend-color		   : #999;

// Input
@input-height-base		   : 32px;
@input-height-large		  : 36px;
@input-height-small		  : 24px;

@input-padding-horizontal	: 7px;
@input-padding-vertical-base : 4px;
@input-padding-vertical-small: 1px;
@input-padding-vertical-large: 6px;

@input-placeholder-color	 : @btn-disable-color;
@input-color				 : @text-color;
@input-border-color		  : @border-color-base;
@input-bg					: #fff;

@input-hover-border-color	: @primary-color;
@input-focus-border-color	: @primary-color;
@input-disabled-bg		   : #f3f3f3;

// Tag
@tag-font-size		  : 12px;

// Media queries breakpoints
// Extra small screen / phone
@screen-xs			  : 480px;
@screen-xs-min		  : @screen-xs;
@screen-xs-max		  : (@screen-xs-min - 1);

// Small screen / tablet
@screen-sm			  : 768px;
@screen-sm-min		  : @screen-sm;
@screen-sm-max		  : (@screen-sm-min - 1);

// Medium screen / desktop
@screen-md			  : 992px;
@screen-md-min		  : @screen-md;
@screen-md-max		  : (@screen-md-min - 1);

// Large screen / wide desktop
@screen-lg			  : 1200px;
@screen-lg-min		  : @screen-lg;
@screen-lg-max		  : (@screen-lg-min - 1);

// Z-index
@zindex-spin			: 8;
@zindex-affix		   : 10;
@zindex-back-top		: 10;
@zindex-select		  : 900;
@zindex-modal		   : 1000;
@zindex-message		 : 1010;
@zindex-notification	: 1010;
@zindex-tooltip		 : 1060;
@zindex-transfer		: 1060;
@zindex-loading-bar	 : 2000;
@zindex-spin-fullscreen : 2010;

// Animation
@animation-time		 : .3s;
@transition-time		: .2s;
@ease-in-out			: ease-in-out;

// Slider
@slider-color			  : tint(@primary-color, 20%);
@slider-height			 : 4px;
@slider-margin			 : 16px 0;
@slider-button-wrap-size   : 18px;
@slider-button-wrap-offset : -4px;
@slider-disabled-color	 : #ccc;

// Avatar
@avatar-size-base: 32px;
@avatar-size-lg: 40px;
@avatar-size-sm: 24px;
@avatar-font-size-base: 18px;
@avatar-font-size-lg: 24px;
@avatar-font-size-sm: 14px;
@avatar-bg: #ccc;
@avatar-color: #fff;
@avatar-border-radius: @border-radius-small;

* {
	box-sizing: border-box;
	-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

*:before,
*:after {
	box-sizing: border-box;
}

body {
	font-family: @font-family;
	font-size: @font-size-small;
	line-height: @line-height-base;
	color: @text-color;
	background-color: @body-background;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, form, fieldset, legend, input, textarea, p, blockquote, th, td, hr, button, article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
	margin: 0;
	padding: 0;
}

button, input, select, textarea {
	font-family: inherit;
	font-size: inherit;
	line-height: inherit;
}

ul,
ol {
	list-style: none;
}

input::-ms-clear, input::-ms-reveal {
	display: none;
}

a {
	color: @link-color;
	background: transparent;
	text-decoration: none;
	outline: none;
	cursor: pointer;
	transition: color @transition-time ease;

	&:hover {
		color: @link-hover-color;
	}

	&:active {
		color: @link-active-color;
	}

	&:active,
	&:hover {
		outline: 0;
		text-decoration: none;
	}

	&[disabled] {
		color: #ccc;
		cursor: @cursor-disabled;
		pointer-events: none;
	}
}

code,
kbd,
pre,
samp {
	font-family: @code-family;
}

.size(@width; @height) {
	width: @width;
	height: @height;
}

.square(@size) {
	.size(@size; @size);
}

// fix chrome 12px bug, support ie
.iconfont-size-under-12px(@size, @rotate: 0deg) {
	display: inline-block;
	@font-scale: unit(@size / @font-size-base);
	font-size: @font-size-base;
	font-size: ~"@{size} \9"; // ie8-9
	transform: scale(@font-scale) rotate(@rotate);
	:root & {
		font-size: @font-size-base; // reset ie9 and above
	}
}

.ivu-article {
	h1{
		font-size: 26px;
		font-weight: normal;
	}
	h2{
		font-size: 20px;
		font-weight: normal;
	}
	h3{
		font-size: 16px;
		font-weight: normal;
	}
	h4{
		font-size: 14px;
		font-weight: normal;
	}
	h5{
		font-size: 12px;
		font-weight: normal;
	}
	h6{
		font-size: 12px;
		font-weight: normal;
	}

	blockquote{
		padding: 5px 5px 3px 10px;
		line-height: 1.5;
		border-left: 4px solid #ddd;
		margin-bottom: 20px;
		color: #666;
		font-size: 14px;
	}

	ul:not([class^="ivu-"]){
		padding-left: 40px;
		list-style-type: disc;
	}
	li:not([class^="ivu-"]){
		margin-bottom: 5px;
		font-size: 14px;
	}
	ul ul:not([class^="ivu-"]), ol ul:not([class^="ivu-"]){
		list-style-type: circle;
	}

	p{
		margin: 5px;
		font-size: 14px;
	}

	a[target="_blank"]:after{
		content: "\F220";
		font-family: Ionicons;
		color: #aaa;
		margin-left: 3px;
	}
}

.motion-common() {
	animation-duration: @animation-time;
	animation-fill-mode: both;
}

.make-motion(@className, @keyframeName) {
	.@{className}-enter-active, .@{className}-appear {
		.motion-common();
		animation-play-state: paused;
	}
	.@{className}-leave-active {
		.motion-common();
		animation-play-state: paused;
	}
	.@{className}-enter-active, .@{className}-appear {
		animation-name: ~"@{keyframeName}In";
		animation-play-state: running;
	}
	.@{className}-leave-active {
		animation-name: ~"@{keyframeName}Out";
		animation-play-state: running;
	}
}

//@import "fade";
//@import "move";
//@import "ease";
//@import "slide";

.collapse-transition {
	transition: @transition-time height ease-in-out, @transition-time padding-top ease-in-out, @transition-time padding-bottom ease-in-out;
}

.ivu-load-loop{
	animation: ani-load-loop 1s linear infinite;
}

@keyframes ani-load-loop {
	from { transform: rotate(0deg);}
	50%  { transform: rotate(180deg);}
	to   { transform: rotate(360deg);}
}

// mixins/clearfix.less
.clearfix() {
	zoom: 1;
	&:before,
	&:after {
		content: "";
		display: table;
	}
	&:after {
		clear: both;
		visibility: hidden;
		font-size: 0;
		height: 0;
	}
}

// mixins/select.less
.select-item(@size-class, @item-class) {
	.@{item-class} {
		margin: 0;
		line-height: normal;
		padding: 7px 16px;
		clear: both;
		color: @text-color;
		font-size: @font-size-small !important;
		white-space: nowrap;
		list-style: none;
		cursor: pointer;
		transition: background @transition-time @ease-in-out;

		&:hover{
			background: @background-color-select-hover;
		}

		&-focus {
			background: @background-color-select-hover;
		}

		&-disabled {
			color: @btn-disable-color;
			cursor: @cursor-disabled;

			&:hover {
				color: @btn-disable-color;
				background-color: #fff;
				cursor: @cursor-disabled;
			}
		}

		&-selected ,&-selected:hover{
			color: #fff;
			background: @selected-color;
		}

		&-selected&-focus {
			background: shade(@selected-color, 10%);
		}

		&-divided{
			margin-top: 5px;
			border-top: 1px solid @border-color-split;
			&:before{
				content: '';
				height: 5px;
				display: block;
				margin: 0 -16px;
				background-color: #fff;
				position: relative;
				top: -7px;
			}
		}
	}

	.@{size-class}-large .@{item-class} {
		padding: 7px 16px 8px;
		font-size: @font-size-base !important;
	}
	// http://browserhacks.com/
	// https://bugzilla.mozilla.org/show_bug.cgi?id=488725
	// fixed #1224 #1143 #1127
	@-moz-document url-prefix() {
		.@{item-class} {
			white-space: normal;
		}
	}
}

// mixins/content.less
@icon-prefix-cls: ~"@{css-prefix}icon";

.content-header() {
	border-bottom: 1px solid @border-color-split;
	padding: 14px 16px;
	line-height: 1;

	p,
	&-inner
	{
		display: inline-block;
		width: 100%;
		height: 20px;
		line-height: 20px;
		font-size: @font-size-base;
		color: @title-color;
		font-weight: bold;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
	}
}

.content-close(@top: 0, @icon-font-size: 22px) {
	font-size: @font-size-small;
	position: absolute;
	right: 16px;
	top: 8px;
	overflow: hidden;
	cursor: pointer;

	.@{icon-prefix-cls}-ios-close-empty {
		.close-base(@top, @icon-font-size);
	}
}
</style>

<script>
	//Vue.component('normalize');
</script>
