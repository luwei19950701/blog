
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.axios = require('axios');
window.VueAxios = require('vue-axios');
window.VueRouter = require('vue-router');
window.infiniteScroll = require('vue-infinite-scroll');

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN':document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    'X-Requested-With': 'XMLHttpRequest',
};
window.axios.defaults.headers.get['Content-Type'] = 'application/x-www-form-urlencoded';

Vue.use([VueRouter,infiniteScroll])
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('page', require('./components/ArticleList.vue'));

const app = new Vue({
    el: '#app'
});
