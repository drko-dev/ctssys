<template>
		<div class="columns">
				<div class="column is-half is-offset-one-quarter">
						<div class="box field">
								<form id="contact_form" v-on:submit.prevent="submit" action="">
										<h1 class="has-text-centered has-text-weight-bold">Contact Form</h1>
										<vue-form-generator :schema="schema" :model="model" :options="formOptions"></vue-form-generator>
										<div class="control">
												<button type="submit" class="button">Send</button>
										</div>
								</form>
						</div>
				</div>
		</div>
</template>

<script>

export default {
	
	methods: {
			
		submit(){
				// GET /someUrl
				this.$http.post('/api/contact', this.model).then(
						response => {
								// get body data
								//this.lista = response.body;
								console.log('ok llego');
						}, 
						response => {
								// error callback
								alert(urlLocal);
						});
				}
	},

	data () {
		return {

			model: {
				subject: '',
				name: '',
				message: '',
				email: '',
				status: true
			},

			schema: {
				groups: [
					{
						// legend: "User Details",
						fields: [
							{
								type: "input",
								inputType: "text",
								label: "Subject",
								model: "subject",
								placeholder: "Your subject",
								featured: true,
								required: true
							},
							{
								type: "input",
								inputType: "text",
								label: "Name",
								model: "name",
								id: "user_name",
								placeholder: "Your name",
								featured: true,
								required: true
							},
							{
								type: "input",
								inputType: "email",
								label: "E-mail",
								model: "email",
								featured: true,
								placeholder: "User's e-mail address",
								required: true
							},
							{
								type: "textArea",
								label: "Message",
								model: "message",
								hint: "Max 140 characters",
								max: 140,
								placeholder: "Your Message",
								featured: true,
								rows: 4,
								required: true
							}
						]
					}
					],

				},
					formOptions: {
						validateAfterLoad: true,
						validateAfterChanged: true,
						fieldIdPrefix: 'user-'
					}
			}
		}
	
}
</script>

<style>
		div fieldset{
				border: none;
		}

</style>