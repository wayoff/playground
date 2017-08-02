
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

// window.Vue = require('vue');

import Vue from 'vue';

const MyApp = require('./components/MyApp.vue');

/**
 * passpost
 */
Vue.component('passport-clients', require('./components/passport/Clients.vue'));
Vue.component('passport-authorized-clients', require('./components/passport/AuthorizedClients.vue'));
Vue.component('passport-personal-access-tokens', require('./components/passport/PersonalAccessTokens.vue'));

// components
Vue.component('hero', require('./components/Hero.vue'));
Vue.component('login', require('./components/Login.vue'));
Vue.component('lessons', require('./components/lessons/index.vue'));

import router from './router';
import store from './store';

const app = new Vue({
    el: '#app',
    router,
    store,
    render: r => r(MyApp)
});
