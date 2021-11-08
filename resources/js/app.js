require('./bootstrap');
import Vue from 'vue'

window.Vue = require('vue');
Vue.component('ExampleComponent', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
   });
