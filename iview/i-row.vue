
<style>
// Layout
@row-prefix-cls: ~"@{css-prefix}row";
@col-prefix-cls: ~"@{css-prefix}col";

.make-row(@gutter: @grid-gutter-width) {
	position: relative;
	margin-left: (@gutter / -2);
	margin-right: (@gutter / -2);
	height: auto;
	.clearfix;
}

.float-grid-columns(@class) {
	.col(@index) { // initial
		@item: ~".@{col-prefix-cls}-span@{class}-@{index}";
		.col-2((@index + 1), @item);
	}
	.col-2(@index, @list) when (@index =< @grid-columns) { // general
		@item: ~".@{col-prefix-cls}-span@{class}-@{index}";
		.col-2((@index + 1), ~"@{list}, @{item}");
	}
	.col-2(@index, @list) when (@index > @grid-columns) { // terminal
		@{list} {
			float: left;
			flex: 0 0 auto;
		}
	}
	.col(1); // kickstart it
}

.loop-grid-columns(@index, @class) when (@index > 0) {
	.@{col-prefix-cls}-span@{class}-@{index} {
		display: block;
		width: percentage((@index / @grid-columns));
	}
	.@{col-prefix-cls}@{class}-push-@{index} {
		left: percentage((@index / @grid-columns));
	}
	.@{col-prefix-cls}@{class}-pull-@{index} {
		right: percentage((@index / @grid-columns));
	}
	.@{col-prefix-cls}@{class}-offset-@{index} {
		margin-left: percentage((@index / @grid-columns));
	}
	.@{col-prefix-cls}@{class}-order-@{index} {
		order: @index;
	}
	.loop-grid-columns((@index - 1), @class);
}

.loop-grid-columns(@index, @class) when (@index = 0) {
	.@{col-prefix-cls}-span@{class}-@{index} {
		display: none;
	}
	.@{col-prefix-cls}@{class}-push-@{index} {
		left: auto;
	}
	.@{col-prefix-cls}@{class}-pull-@{index} {
		right: auto;
	}
}

.make-grid(@class: ~'') {
	.float-grid-columns(@class);
	.loop-grid-columns(@grid-columns, @class);
}

.@{row-prefix-cls} {
	.make-row();
	display: block;

	&-flex {
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;

		&:before,
		&:after {
			display: flex;
		}
		// x轴原点
		&-start {
			justify-content: flex-start;
		}
		// x轴居中
		&-center {
			justify-content: center;
		}
		// x轴反方向
		&-end {
			justify-content: flex-end;
		}
		// x轴平分
		&-space-between {
			justify-content: space-between;
		}
		// x轴有间隔地平分
		&-space-around {
			justify-content: space-around;
		}
		// 顶部对齐
		&-top {
			align-items: flex-start;
		}
		// 居中对齐
		&-middle {
			align-items: center;
		}
		// 底部对齐
		&-bottom {
			align-items: flex-end;
		}
	};
}

.@{col-prefix-cls} {
	position: relative;
	display: block;
}

.make-grid();

// Extra small grid
//
// Columns, offsets, pushes, and pulls for extra small devices like
// smartphones.

@media (min-width: @screen-xs-min) {
	.make-grid(-xs);
}

// Small grid
//
// Columns, offsets, pushes, and pulls for the small device range, from phones
// to tablets.

@media (min-width: @screen-sm-min) {
	.make-grid(-sm);
}


// Medium grid
//
// Columns, offsets, pushes, and pulls for the desktop device range.

@media (min-width: @screen-md-min) {
	.make-grid(-md);
}


// Large grid
//
// Columns, offsets, pushes, and pulls for the large desktop device range.

@media (min-width: @screen-lg-min) {
	.make-grid(-lg);
}
</style>

<template>
	<div :class="classes" :style="styles">
		<slot />
	</div>
</template>

<script>
//Vue.component('i-style')

module.exports = {
	props: {
		type: {
			validator (value) {
				return oneOf(value, ['flex']);
			}
		},
		align: {
			validator (value) {
				return oneOf(value, ['top', 'middle', 'bottom']);
			}
		},
		justify: {
			validator (value) {
				return oneOf(value, ['start', 'end', 'center', 'space-around', 'space-between']);
			}
		},
		gutter: {
			type: Number,
			default: 0
		},
		className: String
	},
	computed: {
		classes: function() {
			var ret = [];
			if( !this.type ) {
				ret.push('ivu-row');
			}
			if( !!this.type ) { 
				ret.push('ivu-row-' + this.type);
				if( !!this.align ) {
					ret.push( 'ivu-row-' + this.type + '-' + this.align );
				}
				if( !!this.justify ) {
					ret.push( 'ivu-row-' + this.type + '-' + this.justify );
				}
			}
			if( !!this.className ) {
				ret.push( this.className );
			}
			return ret;
		},
		styles: function() {
			var style = {};
			if (this.gutter !== 0) {
				style = {
					marginLeft: this.gutter / -2 + 'px',
					marginRight: this.gutter / -2 + 'px'
				};
			}
			return style;
		},
	},
};
</script>

