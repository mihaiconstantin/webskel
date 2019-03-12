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
        
        // This function can be called within the `mounted` hook of every component that requires the functionality of `smoothscroll`. 
        Vue.prototype.$initVueSmoothScroll = (selector) => {
            console.log("Starting `smoothscroll`.");

            let target = '';

            if (Array.isArray(selector)) {
                target = selector.map(element => `${element} a[href*="#"]`).join(", ");
            } else {
                target = `${selector} a[href*="#"]`;
            }
        
            new SmoothScroll(target, { ...smoothScrollConfig, ...options });
        }
    }
}

export default VueSmoothScroll;
