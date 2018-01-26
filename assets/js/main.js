import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import router from './router/'
import Buefy from 'buefy'
import App from './App.vue'
import VueFormGenerator from "vue-form-generator";

Vue.config.productionTip = false
Vue.use(Buefy)
Vue.use(VueRouter);
Vue.use(VueResource);
Vue.use(VueFormGenerator);

let appVue = new Vue({
  el: '#vueApp',
  router,
  template: '<App/>',
  components: { App }
})
