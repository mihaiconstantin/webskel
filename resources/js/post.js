require('./bootstrap');


// Import Vue.
import Vue from 'vue';


// Import Vue plugins.
import VueAos from './plugins/VueAos.js';


// Register Vue plugins.
Vue.use(VueAos, { duration: 500, offset: 300, easing: 'ease-out-back' });


// Import configurations.
import { config } from './config.js';


// Import the Vue components.
import Navigation from './components/Navigation.vue';
import Footer from './components/Footer.vue';


// Globally register the Vue components.
Vue.component('app-navigation', Navigation);
Vue.component('app-footer', Footer);


Vue.config.productionTip = false;


const app = new Vue({
    el: '#app',

    mounted() {
        this.$nextTick(() => {
            this.$initVueAos();
        });
    }
});
