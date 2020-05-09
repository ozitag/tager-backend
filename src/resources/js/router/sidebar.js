const routes = [
    {
        name: 'Пользователи',
        icon: 'ni ni-box-2 text-primary',
        path: '/admin/users',
        id: 'orders',
        children: [
            {
                path: '/admin/users',
                name: 'Список'
            },
            {
                path: '/admin/users/create',
                name: 'Создать'
            },
        ]
    },
    {
        name: 'UI | Компоненты',
        icon: 'ni ni-ui-04',
        path: '/admin/ui'
    },
];

export default routes;
