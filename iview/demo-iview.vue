<template>
	<div>
		<div v-for="item in items">
			<div v-if="item.html != null" v-html="item.html" />
			<table class="demo" v-if="item.name != null">
				<tr>
					<td span="2">
						File <b>{{item.name}}.vue</b>
					</td>
				</tr>
				<tr>
					<td align="center">
						<component v-bind:is="item.name" />
					</td>
					<td>
						<code><pre>{{item.code}}</pre></code>
					</td>
				</tr>
			</table>
		</div>
	</div>
</template>

<script>
//Vue.component('index')
//Vue.component('demo-i-button')
//Vue.component('demo-i-card')
module.exports = {
	data: function() {
		return {
			items: [],
		};
	},
	created: function() {
		var self = this;
		this.$http.post('/', {
			action: 'vue-get-md',
			name: 'iview',
		}).then(function(responce) {
			self.items = responce.body;
		});
	},
};
</script>
