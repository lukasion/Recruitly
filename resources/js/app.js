import './bootstrap';
import {createPinia} from 'pinia'
import {createApp} from 'vue'
import {Quasar} from 'quasar'
import quasarLang from 'quasar/lang/pl'
import '@quasar/extras/material-icons/material-icons.css'
import 'quasar/src/css/index.sass'

import App from './App.vue'
import router from './routes'

const appContainer = document.getElementById('app');

if (appContainer) {
    const pinia = createPinia()
    const app = createApp(App)

    app.use(router)
    app.use(pinia)
    app.use(Quasar, {
        plugins: {},
        lang: quasarLang,
    })


    app.mount('#app')
}