require('./bootstrap');
import Vue from 'vue'; // if this is not work add this =>  
window.Vue = require('vue');

import axios from 'axios';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import BootstrapVue from 'bootstrap-vue'; //Importing

Vue.use(BootstrapVue) // Telling Vue to use this in whole application
Vue.config.productionTip = false
Vue.use(VueRouter);
Vue.use(VueAxios, axios);

import App from './app.vue';
import { routes } from './routes';



const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),
});
// app.config.globalProperties.$axios = axios;