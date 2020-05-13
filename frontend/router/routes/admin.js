import { Role } from '@/helpers/role'
import Dashboard from '@/modules/admin/dashboard/index'
import UsersList from '@/modules/admin/users/list/index'
import UserEdit from '@/modules/admin/users/edit/index'

const adminRoutes = [
    
    {
        path: '/admin',
        component: Dashboard,
        meta: {
            title: 'Панель администратора',
            role: Role.Admin,
            layout: 'Admin'
        }
    },
    {
        path: '/admin/users/create',
        component: UserEdit,
        meta: {
            title: 'Добавление пользователя',
            role: Role.Admin,
            layout: 'Admin'
        }
    },
    {
        path: '/admin/users/:id',
        component: UserEdit,
        meta: {
            title: 'Пользователь',
            role: Role.Admin,
            layout: 'Admin'
        }
    },
    {
        path: '/admin/users',
        component: UsersList,
        meta: {
            title: 'Пользователи',
            role: Role.Admin,
            layout: 'Admin'
        }
    },
]

export default adminRoutes
