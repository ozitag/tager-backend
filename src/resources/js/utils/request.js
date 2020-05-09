import axios from 'axios'
import store from '@/store'

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
const service = axios.create({
    baseURL: '/api',
    timeout: 20000
})

service.interceptors.request.use(
    config => {
        if (store.getters.token) {
            config.headers['Authorization'] = 'Bearer ' + store.getters.token
        }
        return config
    },
    error => {
        return Promise.reject(error)
    }
)

service.interceptors.response.use(
    response => {
        return response.data
    },
    error => {
        const res = error.response
        if(res.data && res.data.message) {
            const vm = new Vue()
            vm.$bvToast.toast(res.data.message, {
                title: 'Ошибка при отправке запроса',
                variant: 'danger',
                solid: true
            })
        }
        if(res && res.data && res.data.errors)
        for (error in res.data.errors) {
            Array.prototype.forEach.call(res[error], el => {
                const vm = new Vue()
                vm.$bvToast.toast(el.message || el, {
                    title: 'Ошибка при отправке запроса',
                    variant: 'danger',
                    solid: true
                })
            })
        }
        return Promise.reject(error)
    }
)

export default service
