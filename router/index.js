import Vue from 'vue'
import Router from 'vue-router'
import routes from './routes'
Vue.use(Router)
const router = new Router({
  routes,
  mode: 'history'
})
export default router

router.beforeEach((to, from, next) => {
  const authRequired = to.matched.some((route) => route.meta.authRequired)
  if (!authRequired) return next()
  // check if current user
  if (store.getters['auth/loggedIn']) {
    // maybe do some validation to check token is valid //
    next()
  }
  next({ name: 'login', query: { redirectFrom: to.fullPath } })
})
