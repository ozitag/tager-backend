import Vue from 'vue'
import Router from 'vue-router'
import store from '../store/index'
import defaultRoutes from "./routes/default";
import adminRoutes from "./routes/admin";
Vue.use(Router)

const router = new Router({
    mode: 'history',
    routes: [
        ...adminRoutes,
        ...defaultRoutes,
    ]
})

router.beforeEach((to, from, next) => {
    document.title = to.meta.title ? 'Starter - ' + to.meta.title : 'Starter.by'
    if(to.meta.role && to.meta.role !== Number(store.getters.role)) {
        console.log(to.meta.role, Number(store.getters.role))
        return next({
            path: store.getters.role > 0 ? '/admin/404' : '/admin/auth'
        })
    }
    next()
})

export default router
