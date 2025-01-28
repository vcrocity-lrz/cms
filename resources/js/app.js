import './bootstrap';

import { createApp } from  'vue';
import PrimeVue from 'primevue/config';
import App from './components/App.vue';
import ToastService from 'primevue/toastservice';
import Aura from '@primevue/themes/aura';


import router from './router';

const app = createApp(App);
app.use(PrimeVue, {
    theme: {
        preset: Aura
    }
});

app.use(router);
app.use(ToastService);

app.mount('#app');