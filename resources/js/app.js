import './bootstrap';
import { createApp } from 'vue';
import App from './App.vue';
import router from './router/index';
import axios from 'axios';
import VueAxios from 'vue-axios';
import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css'

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.headers.common['X-CSRF-TOKEN'] = window.Laravel.csrfToken;

const app = createApp(App);

app
    .component('VueDatePicker', VueDatePicker)
    .use(router)
    .use(VueAxios, axios)
    .mount('#app');
