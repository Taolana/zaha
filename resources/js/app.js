/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');
 import App from './layouts/App.vue';

 window.Vue = require('vue').default;
 
 import router from './router';

 Vue.component('example-component', require('./components/ExampleComponent.vue').default);
 
 const app = new Vue({
    el: '#app',
    router,
    render: h => h(App)
 });
