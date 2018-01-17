<template>
  <div class="block">
  <!-- Hero content: will be in the middle -->
    <div class="hero-body">
      <div class="container has-text-centered">
          <h1 class="title">
            <!-- <div class="nombre">{{$data}}</div> -->
            <div v-for="item in lista.results"> {{ item.name.first }}</div>
          </h1>
        <h2 class="subtitle">
          Innovating and making everything simpler
        </h2>
      </div>
    </div>
  </div>
</template>


<script>

var urlUsers = 'https://randomuser.me/api/?results=5';

var lista = {};

export default {
    name: 'hello',

    created: function(){
        this.getUser();
    },

    data: function() {
        return { lista }
    },

    methods: { 
        getUser(){
        // GET /someUrl
        this.$http.get(urlUsers).then(
            response => {
                // get body data
                this.lista = response.body;

            }, 
            response => {
                // error callback
                alert('error conexión');
            });
        }
    }
}

</script>


<style lang="css" scoped>
  
.nombre{
    color: red;
    /*font-size: 2em;*/
}

</style>