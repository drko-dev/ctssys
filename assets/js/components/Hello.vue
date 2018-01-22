<template>
  <div class="block">
  <!-- Hero content: will be in the middle -->
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title">
        Titulo
        </h1>
<!--             <div class="nombre">
                <pre>
                    {{$data}}
                </pre>
            </div> -->
            <div class="nombre" v-for="item in lista"> {{ item.username }} - {{ item.email }}</div>
        <h2 class="subtitle">
          Innovating and making everything simpler
        </h2>
      </div>
    </div>
  </div>
</template>


<script>

var urlLocal = '/api/get-users';

export default {
    name: 'hello',

    created(){
        this.getUser();
    },

    data(){
        return {
            lista:[]
        }
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
    color: silver;
    font-size: 1em;
}

</style>