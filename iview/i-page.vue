<style>
@page-prefix-cls: ~"@{css-prefix}page";

.@{page-prefix-cls} {
	&:after {
		content: '';
		display: block;
		height: 0;
		clear: both;
		overflow: hidden;
		visibility: hidden;
	}

	&-item {
		display: inline-block;
		vertical-align: middle;
		min-width: @btn-circle-size;
		height: @btn-circle-size;
		line-height: @btn-circle-size - 2px;
		margin-right: 4px;
		text-align: center;
		list-style: none;
		background-color: #fff;
		user-select: none;
		cursor: pointer;
		font-family: Arial;
		border: 1px solid @border-color-base;
		border-radius: @btn-border-radius;
		transition: border @transition-time @ease-in-out, color @transition-time @ease-in-out;

		a {
			margin: 0 6px;
			text-decoration: none;
			color: @text-color;
		}

		&:hover {
			border-color: @primary-color;
			a {
				color: @primary-color;
			}
		}

		&-active {
			background-color: @primary-color;
			border-color: @primary-color;

			a, &:hover a {
				color: #fff;
			}
		}
	}

	&-item-jump-prev, &-item-jump-next {
		&:after {
			content: "•••";
			display: block;
			letter-spacing: 1px;
			color: #ccc;
			text-align: center;
		}

		i{
			display: none;
		}

		&:hover {
			&:after{
				display: none;
			}
			i{
				display: inline;
			}
		}
	}

	&-item-jump-prev:hover {
		i:after {
			content: "\F3D2";
		}
	}

	&-item-jump-next:hover {
		i:after {
			content: "\F3D3";
		}
	}

	&-prev{
		margin-right: 8px;
	}

	&-item-jump-prev,
	&-item-jump-next{
		margin-right: 4px;
	}

	&-next{
		margin-left: 4px;
	}

	&-prev,
	&-next,
	&-item-jump-prev,
	&-item-jump-next {
		display: inline-block;
		vertical-align: middle;
		min-width: @btn-circle-size;
		height: @btn-circle-size;
		line-height: @btn-circle-size - 2px;
		list-style: none;
		text-align: center;
		cursor: pointer;
		color: #666;
		font-family: Arial;
		border: 1px solid @border-color-base;
		border-radius: @btn-border-radius;
		transition: all @transition-time @ease-in-out;
	}

	&-prev,
	&-next {
		background-color: #fff;

		a {
			color: #666;
			font-size: 14px;
		}

		&:hover {
			border-color: @primary-color;

			a {
				color: @primary-color;
			}
		}
	}

	&-disabled {
		cursor: @cursor-disabled;
		a {
			color: #ccc;
		}
		&:hover {
			border-color: @border-color-base;
			a {
				color: #ccc;
				cursor: @cursor-disabled;
			}
		}
	}

	&-options {
		display: inline-block;
		vertical-align: middle;
		margin-left: 15px;
		&-sizer {
			display: inline-block;
			margin-right: 10px;
		}

		&-elevator {
			display: inline-block;
			vertical-align: middle;
			height: @btn-circle-size;
			line-height: @btn-circle-size;

			input {
				.input;
				border-radius: @btn-border-radius;
				margin: 0 8px;
				width: 50px;
			}
		}
	}

	&-total {
		display: inline-block;
		height: @btn-circle-size;
		line-height: @btn-circle-size;
		margin-right: 10px;
	}

	&-simple &-prev,
	&-simple &-next {
		margin: 0;
		border: 0;
		height: 24px;
		line-height: 24px;
		font-size: 18px;
	}

	&-simple &-simple-pager {
		display: inline-block;
		margin-right: 8px;

		input {
			width: 30px;
			height: 24px;
			margin: 0 8px;
			padding: 5px 8px;
			text-align: center;
			box-sizing: border-box;
			background-color: #fff;
			outline: none;
			border: 1px solid @border-color-base;
			border-radius: @btn-border-radius;
			transition: border-color @transition-time @ease-in-out;

			&:hover {
				border-color: @primary-color;
			}
		}

		span{
			padding: 0 8px 0 2px;
		}
	}
}

.@{page-prefix-cls} {
	&.mini &-total {
		height: @btn-circle-size-small;
		line-height: @btn-circle-size-small;
	}

	&.mini &-item {
		border: 0;
		margin: 0;
		min-width: @btn-circle-size-small;
		height: @btn-circle-size-small;
		line-height: @btn-circle-size-small;
		border-radius: @btn-border-radius-small;
	}

	&.mini &-prev,
	&.mini &-next {
		margin: 0;
		min-width: @btn-circle-size-small;
		height: @btn-circle-size-small;
		line-height: @btn-circle-size-small;
		border: 0;

		a {
			i:after {
				height: @btn-circle-size-small;
				line-height: @btn-circle-size-small;
			}
		}
	}

	&.mini &-item-jump-prev,
	&.mini &-item-jump-next {
		height: @btn-circle-size-small;
		line-height: @btn-circle-size-small;
		border: none;
		margin-right: 0;
	}

	&.mini &-options {
		margin-left: 8px;
		&-elevator {
			height: @btn-circle-size-small;
			line-height: @btn-circle-size-small;

			input {
				.input-small;
				width: 44px;
			}
		}
	}
}
</style>

<template>
	<ul class="ivu-page" :class="mini ? 'mini' : ''">
		<li class="ivu-page-prev" :class="value == 1 ? 'ivu-page-disabled' : ''" @click="click(value-1)">
			<a>
				<i class="ivu-icon ivu-icon-ios-arrow-left" />
			</a>
		</li>
		<li v-for="page in items" class="ivu-page-item" :class="getItemClass(page)" @click="click(page)">
			<a v-if="page != 0">{{page}}</a>
			<template v-else>...</template>
		</li>
		<li class="ivu-page-next" :class="value == total ? 'ivu-page-disabled' : ''" @click="click(value+1)">
			<a>
				<i class="ivu-icon ivu-icon-ios-arrow-right" />
			</a>
		</li>
	</ul>
</template>

<script>
//Vue.component('i-style');
module.exports = {
	props: {
		value: {
			type: [Number]
		},
		total: {
			type: [Number]
		},
		mini: {
			type: [Boolean],
			default: false
		},
		showLastPage: {
			type: [Boolean],
			default: false
		},
	},
	computed: {
		items: function() {
			var ret = [];
			var divider = false;
			for(var i = 1; i <= this.total; i++) {
				if( !(
					i <= 3
					|| i >= this.value - 1 && i <= this.value + 1
					|| i >= this.total - 2 && this.showLastPage
				) ) {
					if( !divider ) {
						ret.push(0);
						divider = true;
					}
					continue;
				}
				ret.push(i);
				divider = false;
			}
			return ret;
		},
	},
	methods: {
		getItemClass: function(page) {
			return {
				'ivu-page-item-active': page == this.value,
				'ivu-page-disabled': page == 0,
			}
		},
		click: function(page) {
			if( page < 1 || page > this.total || page == this.value ) {
				return;
			}
			this.$emit('input', page);
		},
	},
}
</script>
