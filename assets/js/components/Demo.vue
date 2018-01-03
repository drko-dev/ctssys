<template>
  <div class="block">
      <div id="welcome">
        <h1><span>Welcome !! to</span> Symfony (Vue Components Demo)</h1>
      </div>
        <div class="level level-padding">
          <div class="level-left">
            <div class="level-item">
              <b-switch></b-switch>
            </div>
          </div>
          <div class="level-rigth">
            <div class="level-item">
              <b-checkbox></b-checkbox>
            </div>
          </div>
        </div>
      <hr>
      <button class="button" @click="$toast.open('This is a Toast')">
            Show Toast
        </button>
      <button class="button is-twitter" @click="$snackbar.open('This is a Snackbar')">
            Show Snackbar
        </button>
      <hr>
      <b-field>
        <b-input maxlength="25" placeholder="Your name"></b-input>
      </b-field>
    <hr/>
    <div class="columns">
      <div class="column is-three-quarters">
        <p class="notification is-info">
          <code class="html">is-three-quarters</code>
        </p>
      </div>
      <div class="column">
        <p class="notification is-warning">Auto</p>
      </div>
      <div class="column">
        <p class="notification is-danger">Auto</p>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'demo'
  }
</script>