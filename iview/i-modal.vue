<style>
//@modal-prefix-cls: ~"@{css-prefix}modal";
//@confirm-prefix-cls: ~"@{css-prefix}modal-confirm";

//.@{modal-prefix-cls} {
//	width: auto;
//	margin: 0 auto;
//	position: relative;
//	outline: none;
//	top: 100px;
//	
//	position: absolute;
//
//	&-hidden {
//		display: none !important;
//	}
//
//	&-wrap {
//		position: fixed;
//		overflow: auto;
//		top: 0;
//		right: 0;
//		bottom: 0;
//		left: 0;
//		z-index: @zindex-modal;
//		-webkit-overflow-scrolling: touch;
//		outline: 0;
//	}
//
//	&-wrap * {
//		box-sizing: border-box;
//		-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
//	}
//
//	&-content {
//		position: relative;
//		background-color: #fff;
//		border: 0;
//		border-radius: @border-radius-base;
//		background-clip: padding-box;
//	}
//
//	&-header {
//		.content-header;
//	}
//
//	&-close {
//		.content-close(1px, 31px);
//	}
//
//	&-body {
//		padding: 16px;
//		font-size: 12px;
//		line-height: 1.5;
//	}
//
//	&-footer {
//		border-top: 1px solid @border-color-split;
//		padding: 12px 18px 12px 18px;
//		text-align: right;
//		button + button {
//			margin-left: 8px;
//			margin-bottom: 0;
//		}
//	}
//
//	&-mask {
//		.mask;
//	}
//}

//@media (max-width: 768px) {
//	.@{modal-prefix-cls} {
//		width: auto !important;
//		margin: 10px;
//	}
//	.vertical-center-modal {
//		.@{modal-prefix-cls} {
//			flex: 1;
//		}
//	}
//}

//.@{confirm-prefix-cls} {
//	padding: 0 4px;
//	&-head {
//
//		&-title {
//			display: inline-block;
//			font-size: @font-size-base;
//			color: @title-color;
//			font-weight: 700;
//		}
//	}
//
//	&-body{
//		margin-top: 6px;
//		padding-left: 48px;
//		padding-top: 18px;
//		font-size: @font-size-small;
//		color: @text-color;
//		position: relative;
//
//		&-render{
//			margin: 0;
//			padding: 0;
//		}
//
//		&-icon {
//			font-size: 36px;
//			position: absolute;
//			top: 0;
//			left: 0;
//
//			&-info {
//				color: @primary-color;
//			}
//			&-success {
//				color: @success-color;
//			}
//			&-warning {
//				color: @warning-color;
//			}
//			&-error {
//				color: @error-color;
//			}
//			&-confirm {
//				color: @warning-color;
//			}
//		}
//	}
//
//	&-footer{
//		margin-top: 40px;
//		text-align: right;
//
//		button + button {
//			margin-left: 8px;
//			margin-bottom: 0;
//		}
//	}
//}
</style>

<template>
	<div>
		<div class="ivu-modal-mask" />
		<div class="ivu-modal-wrap">
			<div class="ivu-modal">
				<div class="ivu-modal-content">
					123
					<!--
					<a class="ivu-modal-close"><i class="ivu-icon ivu-icon-ios-close-empty" /></a>
					<div class="ivu-modal-header"><div class="ivu-modal-header-inner">Common Modal dialog box title</div></div>
					<div class="ivu-modal-body"><p>Content of dialog</p> <p>Content of dialog</p> <p>Content of dialog</p></div>
					<div class="ivu-modal-footer">
						<button type="button" class="ivu-btn ivu-btn-text ivu-btn-large"><span>Cancel</span></button> 
						<button type="button" class="ivu-btn ivu-btn-primary ivu-btn-large"><span>OK</span></button>
					</div>
					-->
				</div>
			</div>
		</div>
	</div>
</template>

<script>
//Vue.component('i-button')
module.exports = {
	//props: {
	//	value: {
	//		type: [Boolean],
	//		default: false
	//	},
	//	title: {
	//		type: [String]
	//	},
	//	closable: {
	//		type: [Boolean],
	//		default: false
	//	},
	//	showLastPage: {
	//		type: [Boolean],
	//		default: false
	//	},
	//},
};
</script>
