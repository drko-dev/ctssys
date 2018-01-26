<template>
		<div class="columns">
				<div class="column is-half is-offset-one-quarter">
						<div class="panel panel-default">
								<div class="panel-heading">Form</div>
								<div class="panel-body">
										<div class="panel-block">
											<form id="contact_form" v-on:submit.prevent="submit" method="POST" enctype="application/x-www-form-urlencoded" action="">
													<vue-form-generator :schema="schema" :model="model" :options="formOptions"></vue-form-generator>
											</form>
										</div>
								</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">Model</div>
							<div class="panel-body">
								<pre v-if="model" v-html="prettyJSON(model)"></pre>
							</div>
						</div>
				</div>
		</div>
</template>

<script>

import VueFormGenerator from "vue-form-generator";

export default {
		components: {
			"vue-form-generator": VueFormGenerator.component
		},
		methods: {
		submit(){
			// GET /someUrl
			this.$http.post('/api/contact/', this.model).then(
					response => {
						// get body data
						//this.lista = response.body;
							console.log(this.model);
					},
					response => {
							// error callback
							alert('error');
					});
		},

		prettyJSON: function(json) {
			if (json) {
				json = JSON.stringify(json, undefined, 4);
				json = json.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;");
				return json.replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g, function (match) {
					var cls = "number";
					if (/^"/.test(match)) {
						if (/:$/.test(match)) {
							cls = "key";
						} else {
							cls = "string";
						}
					} else if (/true|false/.test(match)) {
						cls = "boolean";
					} else if (/null/.test(match)) {
						cls = "null";
					}
					return "<span class=\"" + cls + "\">" + match + "</span>";
				});
			}
		}
	},

	data() {
		return {
		model: {
			id: 1,
			name: "John Doe",
			password: "J0hnD03!x4",
			skills: "Javascript",
			email: "john.doe@gmail.com",
			status: true
		},
		schema: {
			fields: [
				{
					type: "input",
					inputType: "text",
					label: "ID",
					model: "id",
					inputName: "id",
					readonly: true,
					featured: false,
					disabled: true
				},
				{
					type: "input",
					inputType: "text",
					label: "Name",
					model: "name",
					inputName: "name",
					readonly: false,
					featured: true,
					required: true,
					disabled: false,
					placeholder: "User's name",
					validator: VueFormGenerator.validators.string
				},
				{
					type: "input",
					inputType: "password",
					label: "Password",
					model: "password",
					inputName: "password",
					min: 6,
					required: true,
					hint: "Minimum 6 characters",
					validator: VueFormGenerator.validators.string
				},	
				{
					type: "input",
					inputType: "email",
					label: "E-mail",
					model: "email",
					inputName: "email",
					placeholder: "User's e-mail address",
					validator: VueFormGenerator.validators.email
				},					
				{
					type: "select",
					label: "Skills",
					model: "skills",
					inputName: "skills",
					required: true,
					values: [
						"HTML5",
						"Javascript",
						"CSS3",
						"CoffeeScript",
						"AngularJS",
						"ReactJS",
						"VueJS"
					],
					validator: VueFormGenerator.validators.string
				},
				{
					type: "checkbox",
					label: "Status",
					model: "status",
					inputName: "status",
					multi: true,
					readonly: false,
					featured: false,
					disabled: false,
					default: true
				},
				{
					type: "submit",
					label: "",
					buttonText: "Submit",
					validateBeforeSubmit: true
				}

			]
		},

		formOptions: {
			validateAfterLoad: false,
			validateAfterChanged: false
		}
		}
	}
	
}
</script>

<style>

      body {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
      }      

      pre {
        overflow: auto;
      }
        pre .string { color: #885800; }
        pre .number { color: blue; }
        pre .boolean { color: magenta; }
        pre .null { color: red; }
        pre .key { color: green; }    
            
      .container {
        max-width: 970px;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;        
      }

      h1 {
        text-align: center;
        font-size: 36px;
        margin-top: 20px;
        margin-bottom: 10px;
        font-weight: 500;
      }

      fieldset {
        border: 0;
      }

      .panel {
        margin-bottom: 20px;
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        border-color: #ddd;
      }

      .panel-heading {
        color: #333;
        background-color: #f5f5f5;
        border-color: #ddd;

        padding: 10px 15px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;        
      }

      .panel-body {
        padding: 15px;
      }

			@import "~vue-form-generator/dist/vfg-core.css";  

</style>