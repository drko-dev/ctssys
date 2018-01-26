<template>
<div class="box">

    <div id="app" class="container py-5">

    <p>Example showing vue-form usage with Bootstrap styles, validation messages are shown on field touched or form submission</p>

    <vue-form :state="formstate" @submit.prevent="onSubmit">

      <validate auto-label class="form-group required-field" :class="fieldClassName(formstate.name)">
        <label class="label">Name</label>
        <input type="text" name="name" class="control" required v-model.lazy="model.name">

        <field-messages name="name" show="$touched || $submitted" class="form-control-feedback">
          <div>Success!</div>
          <div slot="required">Name is a required field</div>
        </field-messages>

      </validate>

      <validate auto-label class="form-group required-field" :class="fieldClassName(formstate.email)">
        <label class="label">Email</label>
        <input type="email" name="email" class="control" required v-model.lazy="model.email">

        <field-messages auto-label name="email" show="$touched || $submitted" class="form-control-feedback">
          <div>Success!</div>
          <div slot="required">Email is a required field</div>
          <div slot="email">Email is invalid</div>
        </field-messages>

      </validate>

      <validate auto-label class="form-group required-field" :class="fieldClassName(formstate.phone)">
        <label>Phone number (format: xxxx-xxx-xxxx)</label>
        <input type="tel" name="phone" class="form-control" required pattern="^\d{4}-\d{3}-\d{4}$" v-model.lazy="model.phone">

        <field-messages name="phone" show="$touched || $submitted" class="form-control-feedback">
          <div>Success!</div>
          <div slot="required">Phone number is a required field</div>
          <div slot="pattern">Phone number is invalid</div>
        </field-messages>

      </validate>

      <validate auto-label class="form-group required-field" :class="fieldClassName(formstate.department)">
        <label>Department</label>

        <select class="form-control" name="department" required v-model.lazy="model.department">
          <option :value="null">Choose...</option>
          <option value="1">AAA</option>
          <option value="2">BBB</option>
          <option value="3">CCC</option>
        </select>

        <field-messages name="department" show="$touched || $dirty || $submitted" class="form-control-feedback">
          <div>Success!</div>
          <div slot="required">Department is a required field</div>
        </field-messages>

      </validate>

      <validate auto-label class="form-group" :class="fieldClassName(formstate.comments)">
        <label>Comments</label>
        <textarea name="comments" class="form-control" maxlength="50" v-model.lazy="model.comments"></textarea>
        <small class="form-text text-muted">Enter no more than 50 characters.</small>
        <field-messages name="comments" show="$touched || $submitted" class="form-control-feedback">
          <div>Success!</div>
          <div slot="maxlength">Comments must be less than 50 characters</div>
        </field-messages>
      </validate>

      <field class="form-group">
        <label>Not validated</label>
        <input type="text" name="notValidated" class="form-control" v-model.lazy="model.notValidated">
      </field>
      
       <validate class="form-check" :class="fieldClassName(formstate.agree)">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" required name="agree" v-model="model.agree">
          I agree to the terms
        </label>
         <field-messages name="agree" show="$touched || $submitted" class="form-control-feedback">
          <div slot="required">You must agree to the terms</div>
        </field-messages>
      </validate>     

    </vue-form>

    <!-- <pre>{{formstate}}</pre> -->

  </div>

    <section>
      <validate auto-label  :class="fieldClassName(formstate.name)">
        <b-field horizontal label="Subject">
            <b-input name="subject" required v-model.lazy="model.name" expanded></b-input>
            <field-messages name="name" show="$touched || $submitted">
            <div>Success!</div>
            <div slot="required">Name is a required field</div>
            </field-messages>
        </b-field>
      </validate>


        <b-field horizontal label="From">
            <b-input name="name" placeholder="Name" expanded></b-input>
            <b-input name="email" type="email" placeholder="nobody@nowhere.com" expanded></b-input>
        </b-field>

        <b-field horizontal label="Topic">
            <b-select placeholder="Select a topic">
                <option value="1">Bulma</option>
                <option value="2">Vue.js</option>
                <option value="3">Buefy</option>
            </b-select>
        </b-field>

        <b-field horizontal label="Message">
            <b-input type="textarea"></b-input>
        </b-field>

        <b-field horizontal><!-- Label left empty for spacing -->
            <p class="control">
                <button type="submit" class="button is-primary">
                  Send message
                </button>
            </p>
        </b-field>

    </section>
    </div>
</template>

<script>
export default {
    data() {
        return {
            formstate: {},
      model: {
        name: "",
        email: "",
        phone: "",
        department: null,
        comments: "",
        notValidated: "",
        agree: false
      }
    };
  },
  methods: {
    fieldClassName: function(field) {
      if (!field) {
        return "";
      }
      if ((field.$touched || field.$submitted) && field.$valid) {
        return "has-success";
      }
      if ((field.$touched || field.$submitted) && field.$invalid) {
        return "has-danger";
      }
    },
    onSubmit: function() {
      console.log(this.formstate.$valid);
    }
  }
};
</script>
