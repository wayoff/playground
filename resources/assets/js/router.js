import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

// pages
const IndexPage = require('./pages/Index.vue');
const LessonsPage = require('./pages/Lessons.vue');
const Categories = require('./pages/Categories.vue');

const routes = [
  { path: '/', component: IndexPage },
  { path: '/lessons', component: LessonsPage },
  { path: '/categories', component: Categories },
  { path: '*', redirect: '/' }
];

export default new VueRouter({
  routes
});