require('./bootstrap');
import Vue from 'vue';
import defineRule from 'vee-validate';
window.Vue = require('vue');
Vue.component('ExampleComponent', require('./components/ExampleComponent.vue').default);
Vue.component('defineRule',defineRule);
const app = new Vue({
    el: '#app',
   });
