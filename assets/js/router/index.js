import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)

// components
import Home from '../components/Home'
import Hello from '../components/Hello'
import Notfound from '../components/Notfound'
import Demo from '../components/Demo'
import Contact from '../components/Contact'

export default new Router({
  linkExactActiveClass: '',
  linkActiveClass: 'is-active',
  //mode: 'history',
  routes: [
    {
      path: '/',
      name: 'homepage',
      component: Home
    },
    {
      path: '*',
      name: 'notfound',
      component: Notfound
    },
    {
      path: '/hello',
      name: 'Hello',
      component: Hello
    },
    {
      path: '/demo',
      name: 'demo',
      component: Demo
    },
    {
      path: '/contact',
      name: 'contact',
      component: Contact
    }
  ]
})