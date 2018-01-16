import Vue from 'vue'
import VueRouter from 'vue-router'
import router from './router/'
import Buefy from 'buefy'
import App from './App.vue'

Vue.config.productionTip = false
Vue.use(Buefy)
Vue.use(VueRouter);

let appVue = new Vue({
  el: '#vueApp',
  router,
  template: '<App/>',
  components: { App }
})
