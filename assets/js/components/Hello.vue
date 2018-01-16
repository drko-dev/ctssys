<template id="hola">
  <div class="block">
  <!-- Hero content: will be in the middle -->
    <div class="hero-body">
      <div class="container has-text-centered">
          <h1 class="title">
            <div class="nombre">{{nombre}}</div>
          </h1>
        <h2 class="subtitle">
          Innovating and making everything simpler
        </h2>
      </div>
    </div>
  </div>
</template>


<script>
  export default {
    name: 'hello',
    
    // data: function() {
    //     return{
    //         campaigns: []
    //     }
    //   },

    // ready: function () {
    //     this.fetchCampaigns();
    // },

    // methods: {
    //     fetchCampaigns: function () {
    //       var campaigns = [];
    //       this.$http.get('https://randomuser.me/api/?result=10')
    //         .success(function (campaigns) {
    //           this.$set('campaigns', campaigns);

    //         })
    //         .error(function (err) {
    //           campaigns.log(err);
    //         });
    //     },
    // }
    
    data() {
      return{
        nombre: 'Hola Mundo'
      }
    }

  //   ready() {
  //       this.$http.post('/my-api', {}).then((response) => {
  //      //success
  //   }, (response) => {
  //     //error
  //   });
  // }

    // data() {
    //   return{
    //     lista:[]
    //   }
    // },

    // ready() {
    //     this.$http.get('https://randomuser.me/api/?result=10').then((response) => {

    //         this.lista = response;

    //     }, (response) => {

    //         alert('error');

    //     });
    // },

  //   ready(){
  //     this.getData();
  //   },

  //     ready() {
  //  this.$http.post('/my-api', {}).then((response) => {
  //      //success
  //   }, (response) => {
  //     //error
  //   });
  // }


  }
</script>


<style lang="css" scoped>
  
.nombre{
    color: red;
}

</style>