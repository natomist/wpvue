<style>
.md-reader {
	max-width: @screen-lg;
	margin: 0 auto;

	.code {
		position: relative;
		overflow: hidden;

		code {
			position: absolute;

			&.expanded {
				position: relative;
			}

			pre {
			  -moz-tab-size: 2;
			  -o-tab-size: 2;
			  tab-size: 2;
				font-size: 85%;
				line-height: 1.45;
				background-color: #f6f8fa;
				width: 100%;
			}
		}
	}

	.md-reader-code {
		margin: 1rem 0;

		code {
			width: 100%;

			pre {
				margin: 0;
			}
		}
	}

	table {
		border-collapse: collapse;

		th {
			text-align: center;
		}

		th, td {
			border: 1px solid #ddd;
			padding: 6px 13px;
		}

		&.demo-i-select {
			td.demo {
				border: none;
			}
		}
	}
}
</style>

<template>
	<div class="md-reader">
		<div v-for="(item, index) in items">
			<div v-if="item.html != null" v-html="item.html" />
			<i-card v-else class="md-reader-code" :disHover="true">
				<div slot="title">
					File <b>{{item.name}}.vue</b>
				</div>
				<i-button slot="extra" shape="circle" size="small" :data-index="index" 
					:icon="index == expanded ? 'ios-arrow-down' : 'ios-arrow-up'" @click="expand" />
				<i-row type="flex" :gutter="8">
					<i-col span="14">
						<component v-bind:is="item.name" />
					</i-col>
					<i-col span="10" class="code">
						<code :class="{ expanded: expanded == index }">
							<pre>{{item.code}}</pre>
						</code>
					</i-col>
				</i-row>
			</i-card>
		</div>
	</div>
</template>

<script>
module.exports = {
	props: [ "name" ],
	data: function() {
		return {
			expanded: -1,
			items: [],
		};
	},
	methods: {
		expand: function(event) {
			var newExpanded = parseInt(event.$el.getAttribute('data-index'));
			if( newExpanded == this.expanded ) {
				this.expanded = -1;
			} else {
				this.expanded = newExpanded;
			}
		},
	},
	created: function() {
		var self = this;
		this.$http.post('/', {
			action: 'vue-get-md',
			name: this.name,
		}).then(function(responce) {
			self.items = responce.body;
		});
	},
};
</script>
