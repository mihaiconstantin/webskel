require('./bootstrap');


// Import Vue.
import Vue from 'vue';


// Import Vue plugins.
import VueAos from './plugins/VueAos.js';
import VueParticles from './plugins/VueParticles.js';
import VueSmoothScroll from './plugins/VueSmoothScroll.js';


// Register Vue plugins.
Vue.use(VueAos, { duration: 500, offset: 300 });
Vue.use(VueParticles);
Vue.use(VueSmoothScroll);


// Import configurations.
import { config } from './config.js';


// Import the Vue components.
import Navigation from './components/Navigation.vue';
import Carousel from './components/Carousel.vue';
import About from './components/About.vue';
import Projects from './components/Projects.vue';
import Publications from './components/Publications.vue';
import Presentations from './components/Presentations.vue';
import Contact from './components/Contact.vue';
import ContactInfo from './components/ContactInfo.vue';
import ContactSocial from './components/ContactSocial.vue';
import Footer from './components/Footer.vue';


// Globally register the Vue components.
Vue.component('app-navigation', Navigation);
Vue.component('app-carousel', Carousel);
Vue.component('app-about', About);
Vue.component('app-projects', Projects);
Vue.component('app-publications', Publications);
Vue.component('app-presentations', Presentations);
Vue.component('app-contact', Contact);
Vue.component('app-contact-info', ContactInfo);
Vue.component('app-contact-social', ContactSocial);
Vue.component('app-footer', Footer);


Vue.config.productionTip = false;


const app = new Vue({
    el: '#app',

    beforeCreate() {
        console.log("before create")
    },


    mounted() {
        this.$nextTick(() => {
            console.log('mounted');

            this.$initVueAos();
            this.$initVueParticles('vue-particles');
            this.$initVueSmoothScroll('app-navigation');
        });
    }
});
