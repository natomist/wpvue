
#iview comonents

## grid

[](#demo-i-grid)

## &lt;i-button&gt;

[](#demo-i-button)

## &lt;i-card&gt;

[](#demo-i-card)

## &lt;i-carousel&gt;

[](#demo-i-carousel)

## &lt;i-menu&gt;

[](#demo-i-menu)

## &lt;i-form&gt;
Declare model for form:
```
<script>
module.exports = {
	data: function() {
		return {
			formModel: {
				'name': {
					require: true,
					value: '',
					validate: function(value) {
						return (/^[^0-9!<>,;?=+()@#"°{}_$%:]*$/).test(value) 
							|| "Name should be without digits and special characters";
					},
				},
				'email': {
					require: true,
					value: '',
					validate: function(value) {
						return (/^\S+@\S+\.\S+$/).test(value);
					},
				},
			}
		};
	},
}
</script>
```
Field | Description
:---: | ---
value | Mandatory. This field will be binded with html inputs
require | Optinal. True if field is mandatory
validate | Optinal. Should be function. It returns **false** or text message if value is incorrectly

[](#demo-i-form)

## &lt;steps&gt;

[](#demo-i-steps)

## &lt;tabs&gt;

[](#demo-i-tabs)
