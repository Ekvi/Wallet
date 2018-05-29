require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

let Header = require('./components/Header.vue');
let Footer = require('./components/Footer.vue');

let Dashboard = require('./components/Dashboard.vue');
let Login = require('./components/Login.vue');

const routes = [
    {path: '/login', component: Login},
    {path: '/dashboard', component: Dashboard}
];

const router = new VueRouter({
    //mode: 'history',
    routes
});

const app = new Vue({
    el: '#app',
    router,
    components: {
        appHeader: Header,
        appFooter: Footer
    },
    /*created() {
        console.log('start');
    }*/
});
