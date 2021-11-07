require('./bootstrap');
import Vue from 'vue'

window.Vue = require('vue');
Vue.component('quiz', require('./components/quiz.vue').default);

const app = new Vue({
    el: '#app',
   });
