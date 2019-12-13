import VueRouter from 'vue-router';


let routes = [
    {
        path: '/dashboard',
        component: require('./components/DashboardComponent').default
    },
    {
        path: '/users',
        component: require('./components/UsersComponent').default
    }
];


export default new VueRouter({
    base: '/admin/',
    mode: 'history',
    routes,
    linkActiveClass: 'active'
});