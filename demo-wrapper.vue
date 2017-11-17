<style>
.demo-i-select {
	width: 100%;

	.demo {

		> div {
			margin-bottom: 0.5rem;
		}
	}
}
</style>

<template>
	<table class="demo-i-select">
		<tr>
			<td colspan="2" class="demo" :align="align">
				<slot />
			</td>
		</tr>
		<tr v-for="(field, iField) in $parent.model">
			<td v-text="iField" align="right" />
			<td>
				<select v-model="field.value">
					<option v-for="value in field.list" :value="value">{{value}}</option>
				</select>
			</td>
		</tr>
	</table>
</template>

<script>
module.exports = {
	props: [ 'align' ],
}
</script>
