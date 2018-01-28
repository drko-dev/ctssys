import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import router from './router/'
import Buefy from 'buefy'
import App from './App.vue'
import VueFormly from 'vue-formly'
import VueFormlyBuefy from 'vue-formly-buefy'

Vue.config.productionTip = false
Vue.use(VueRouter);
Vue.use(VueResource);
Vue.use(Buefy)
Vue.use(VueFormly)
Vue.use(VueFormlyBuefy)
let appVue = new Vue({
  el: '#vueApp',
  router,
  template: '<App/>',
  components: { App }
})
