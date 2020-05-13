import Error404 from '@/components/errors/404'
import AuthLogin from '@/components/auth/login'
import Ui from '@/modules/ui-kit'
import { Role } from '@/helpers/role'

const defaultRoutes = [
    {
        path: '/admin/ui',
        component: Ui,
        meta: {
            title: 'UI Kit',
            role: Role.Admin
        }
    },
    {
        path: '/admin/auth',
        component: AuthLogin,
        meta: {
            title: 'Вход',
            role: Role.Guest
        }
    },
    {
        path: '/admin/404',
        component: Error404,
        meta: {
            title: 'Страница не найдена'
        }
    },
    {
        path: '/admin/*',
        redirect: '/admin/404'
    }
]

export default defaultRoutes
