<style>
	.demo-i-select .demo {
		> div {
			margin-bottom: 0.5rem;
		}
	}
</style>

<template>
	<table class="demo-i-select">
		<tr>
			<td align="center" colspan="2" class="demo">
				<slot />
			</td>
		</tr>
		<tr v-for="(field, iField) in $parent.model">
			<td v-text="iField" />
			<td>
				<select v-model="field.value">
					<option v-for="value in field.list" :value="value">{{value}}</option>
				</select>
			</td>
		</tr>
	</table>
</template>
