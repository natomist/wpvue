<style>
.md-reader {
	max-width: 1200px;
	margin: 0 auto;

	table.md-reader-code {
		width: 100%;
		border-collapse: collapse;
		border: 1px solid;

		td.md-reader-b {
			border: 1px solid;
		}

		td.md-reader-50 {
			width: 50%;
		}

		button.md-reader-expand {
			float: right;
		}

		td.md-reader-pre {
			position: relative;
			overflow: hidden;

			pre.md-reader-pre {
				position: absolute;

				&.md-reader-expanded {
					position: relative;
				}
			}
		}
	}
}
</style>

<template>
	<div class="md-reader">
		<div v-for="(item, index) in items">
			<div v-if="item.html != null" v-html="item.html" />
			<table v-else class="md-reader-code">
				<tr>
					<td colspan="2">
						File <b>{{item.name}}.vue</b>
						<button class="md-reader-expand" @click="expand(index)">
							<svg-chevron-up v-if="expanded == index" />
							<svg-chevron-down v-else />
						</button>
					</td>
				</tr>
				<tr>
					<td class="md-reader-50 md-reader-b">
						<component v-bind:is="item.name" />
					</td>
					<td class="md-reader-b md-reader-pre" valign="top">
						<pre class="md-reader-pre" :class="{ 'md-reader-expanded': expanded == index }"
							><code>{{item.code}}</code></pre>
					</td>
				</tr>
			</table>
		</div>
	</div>
</template>

<script>
//Vue.component('svg-chevron-up')
//Vue.component('svg-chevron-down')
module.exports = {
	props: [ "name" ],
	data: function() {
		return {
			expanded: -1,
			items: [],
		};
	},
	methods: {
		expand: function(index) {
			if( this.expanded == index ) {
				this.expanded = -1;
			} else {
				this.expanded = index;
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
