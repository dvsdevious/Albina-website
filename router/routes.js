import Dashboard from '../components/Dashboard'
import Login from '../components/Login'

export default [
  {
    path: '/',
    name: 'dashboard',
    component: Dashboard,
    meta: {
      authRequired: true
    }
  },
  {
    path: '/login',
    name: 'login',
    component: Login
  }
]
