<template>
  <div class="block">
  <!-- Hero content: will be in the middle -->
    <div class="hero-body">
      <div class="container has-text-centered">
          <h1 class="title">
           Titulo
          </h1>
            <div class="nombre">
                <pre>
                    {{$data}}
                </pre>
            </div>
            <div v-for="item in lista.content"> {{ item.nombre }}</div>
        <h2 class="subtitle">
          Innovating and making everything simpler
        </h2>
      </div>
    </div>
  </div>
</template>


<script>

var urlUsers = 'https://randomuser.me/api/?results=5';
var urlLocal = '/json-demo';
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
        this.$http.get(urlLocal).then(
            response => {
                // get body data
                this.lista = response.body;

            }, 
            response => {
                // error callback
                alert(urlLocal);
            });
        }
    }
}

</script>


<style lang="css" scoped>
  
.nombre{
    color: red;
    font-size: 1em;
}

</style>