"use strict";


// Minimal wrapper around the `smoothscroll` library.


// Default configuration.
const smoothScrollConfig = {
    duration: 500, 
    offset: 56
};


// Importing the library this way due to its architecture...
import SmoothScroll from 'smooth-scroll';


const VueSmoothScroll = {
    install(Vue, options) {
        console.log("Installing `VueSmoothScroll`...");
        
        // This function can be called within the `mounted` hook of every 
        // componenet that requires the functionality of `smoothscroll`. 
        Vue.prototype.$initVueSmoothScroll = (id) => {
            console.log("Starting `smoothscroll`.");
            const smoothscroll = new SmoothScroll(`#${id} a[href*="#"]`, { ...smoothScrollConfig, ...options });
        }
    }
}

export default VueSmoothScroll;