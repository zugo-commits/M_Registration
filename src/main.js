import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import 'bootstrap'
// import 'bootstrap/dist/css/bootstrap.min.css'
// import BootstrapVue from 'bootstrap-vue/dist/bootstrap-vue.esm'
// import 'bootstrap/dist/css/bootstrap.css';
// import 'bootstrap-vue/dist/bootstrap-vue.css';
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.config.productionTip = false
// Vue.use(VueAxios, axios)
// Vue.use(BootstrapVue);

new Vue({
  router,
  store,
  axios,
  VueAxios,
  // BootstrapVue,
  render: h => h(App)
}).$mount('#app')
