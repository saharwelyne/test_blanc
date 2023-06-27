import {createRouter, createWebHistory} from 'vue-router';

const router = createRouter({
    history: createWebHistory(),
    routes: [
       
        {
            path: '/login',
            name : 'Login',
            component: () => import('../components/Login')
        },
        {
            path: '/dashboard',
            name : 'Dashboard',
            component: () => import('../components/Dashboard')
        },
        
    ],
})

export default router;