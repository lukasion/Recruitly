import {createRouter, createWebHistory} from 'vue-router';
import {useAuthStore} from '@/stores/authStore';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            component: () => import('./pages/Index.vue')
        },
    ]
})

router.beforeEach(async (to, from) => {
    const authStore = useAuthStore()
    await authStore.init()

    if (!authStore.userData && to.path !== '/login' && to.path !== '/register') {
        window.location.href = '/login'

        return false
    }
})

export default router;