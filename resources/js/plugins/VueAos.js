"use strict";


// Minimal wrapper around the `scrollreveal` library.


// Default configuration.
const aosConfig = {};


// Importing the library.
import AOS from 'aos';


// Load styles.
import 'aos/dist/aos.css';


const VueAos = {
    install(Vue, options) {
        console.log("Installing `VueAos`...");
        
        Vue.prototype.$initVueAos = () => {
            console.log("Starting `aos`.");
            AOS.init({ ...aosConfig, ...options });
        }
    }
}

export default VueAos;
