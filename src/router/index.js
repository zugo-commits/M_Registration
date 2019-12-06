import Vue from 'vue'
import VueRouter from 'vue-router'
// import Home from '../views/Home.vue'
import CRegister from '@/views/C_Register'
import CLogin from '@/views/C_Login'


Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'register',
    component: CRegister
  },
  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  },
  {
    path: '/register',
    name: 'Register',
    component: CRegister
  },
  {
    path: '/login',
    name: 'Login',
    component: CLogin
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
