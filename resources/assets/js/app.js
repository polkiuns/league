
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import {Ziggy} from './ziggy';
import route from '../../../vendor/tightenco/ziggy/src/js/route';

require('./bootstrap.js');
window.Vue = require('vue');
window.Ziggy = Ziggy; // this was missing from your setup
Vue.use(require('vue-resource'));
Vue.use(require('./ziggy.js'))
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('summoner', require('./components/Summoner.vue'));




Vue.mixin({
    methods: {
        route: route
    }
});

const app = new Vue({
    el: '#app'
});


