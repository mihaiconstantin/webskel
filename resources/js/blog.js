require('./bootstrap');


// Import Vue.
import Vue from 'vue';


// Import Vue plugins.
import VueAos from './plugins/VueAos.js';


// Register Vue plugins.
Vue.use(VueAos, { duration: 500, offset: 300, easing: 'ease-out-back' });


// Import configurations.
import { config } from './config.js';


// Import Vuex store.
import { store } from './store/store.js';


// Import the Vue components.
import Navigation from './components/Navigation.vue';
import BlogHeader from './components/BlogHeader.vue';
import PostList from './components/PostList.vue';
import Footer from './components/Footer.vue';


// Globally register the Vue components.
Vue.component('app-navigation', Navigation);
Vue.component('app-blog-header', BlogHeader);
Vue.component('app-post-list', PostList);
Vue.component('app-footer', Footer);


Vue.config.productionTip = false;


const app = new Vue({
    el: '#app',
    store: store,
    

    beforeCreate() {
        this.$store.dispatch('fetchPosts', { api: `${ document.getElementById("app").getAttribute('data-app-api').replace('blog', 'posts') }` });
    },


    mounted() {
        this.$nextTick(() => {
            this.$initVueAos();
        });
    }
});
