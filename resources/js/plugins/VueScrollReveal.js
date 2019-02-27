"use strict";


// Minimal wrapper around the `scrollreveal` library.


// Default configuration.
const scrollRevealConfig = {
    reset: true
};


// Importing the library this way due to its architecture...
import ScrollReveal from 'scrollreveal';


const VueScrollReveal = {
    install(Vue, options) {
        console.log("Installing `VueScrollReveal`...");
        
        // The `reveal` method of this instance variable will be called from wihtin 
        // each component where `smoothscroll` functionality is required.
        Vue.prototype.$scrollreveal = new ScrollReveal({ ...scrollRevealConfig, ...options });
    }
}

export default VueScrollReveal;
