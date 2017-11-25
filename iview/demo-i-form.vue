<template>
	<demo-wrapper>
		<i-form :model="formModel"
			:inline="model.inline.value"
			:label-position="model['label-position'].value">
			<i-form-item label="Name" prop="name">
				<i-input />
			</i-form-item>
			<i-form-item label="E-mail" prop="email">
				<i-input />
			</i-form-item>
			<i-form-item label="Url" prop="url">
				<i-input>
					<span slot="prepend">http://</span>
					<span slot="append">.com</span>
				</i-input>
			</i-form-item>
		</i-form>
	</demo-wrapper>
</template>

<script>
module.exports = {
	data: function() {
		return {
			model: {
				'inline': {
					list: [ true, false ],
					value: false,
				},
				'label-position': {
					list: [ "left", "right", "top" ],
					value: "left",
				},
			},
			formModel: {
				'name': {
					require: true,
					value: 'Jhon',
					validate: function(value) {
						return (/^[^0-9!<>,;?=+()@#"°{}_$%:]*$/).test(value) 
							|| "Name should be without digits and special characters";
					},
				},
				'email': {
					require: true,
					value: 'jhon@mail.com',
					validate: function(value) {
						return (/^\S+@\S+\.\S+$/).test(value);
					},
				},
				'url': {
					value: '',
				},
			}
		};
	},
}
</script>
