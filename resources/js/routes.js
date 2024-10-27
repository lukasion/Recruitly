import {createRouter, createWebHistory} from 'vue-router';
import {useAuthStore} from '@/stores/authStore';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            component: () => import('./pages/Index.vue')
        },
        {
            path: '/login',
            component: () => import('./pages/user/Login.vue')
        }
    ]
})

router.beforeEach((to, from) => {
    const authStore = useAuthStore()

    // Redirect the user to the login page if the user is not authenticated
    // And not already attempting to visit the login or register pages
    if (!authStore.userData && to.path !== '/login' && to.path !== '/register') {
        return '/login'
    }
})

export default router;