import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

// pages
const IndexPage = require('./pages/Index.vue');
const LessonsPage = require('./pages/Lessons.vue');
const Sample = require('./components/Sample.vue');

const routes = [
  { path: '/', component: IndexPage },
  { path: '/lessons', component: LessonsPage },
  { path: '/foo', component: Sample },
  { path: '/bar', component: Sample },
  { path: '*', redirect: '/' }
];

export default new VueRouter({
  routes
});