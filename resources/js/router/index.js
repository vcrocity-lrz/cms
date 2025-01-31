import { createRouter, createWebHistory } from 'vue-router';
import { createPinia } from "pinia";
import NotFoundPage from '@/components/NotFoundPage.vue';


const pinia = createPinia();

const routes = [
    {
        path: '/',
        name: 'landing-page',
        component: () => import('@/components/LandingPage.vue'),
        meta: {
            hasAccess: [
                "Guest"
            ],
        },
    },

    {
        path: '/:pathMatch(.*)*',
        name: 'NotFoundPage',
        component: NotFoundPage
    }
]

const mkrouter = createRouter({
    routes: routes,
    history: createWebHistory(),
});


mkrouter.beforeEach(async (to, from, next) => {

    if (to.meta.hasAccess) {
        next();
    } else {
        next({ name: "landing-page" });
    }
});

export default {
    router: mkrouter,
    pinia: pinia,
};