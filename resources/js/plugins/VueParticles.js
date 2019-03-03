"use strict";


// Minimal wrapper around the `particles.js` library.


// Default configuration.
const particlesJSConfig = {
    "particles": {
        "number": {
            "value": 200,
            "density": {
                "enable": false,
                "value_area": 800
            }
        },

        "color": {
            "value": "#5E8C8B"
        },

        "shape": {
            "type": "circle",
            "stroke": {
                "width": 0,
                "color": "#000000"
            },
            "polygon": {
                "nb_sides": 5
            },
            "image": {
                "src": "",
                "width": 100,
                "height": 100
            }
        },

        "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
                "enable": true,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
            }
        },

        "size": {
            "value": 4,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 40,
                "size_min": 0.1,
                "sync": false
            }
        },

        "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#FEEAD4",
            "opacity": 0.4,
            "width": 1
        },

        "move": {
            "enable": true,
            "speed": 2,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "attract": {
                "enable": false,
                "rotateX": 600,
                "rotateY": 1200
            }
        }
    },

    "interactivity": {
        "detect_on": "canvas",

        "events": {
            "onhover": {
                "enable": true,
                "mode": "grab"
            },

            "onclick": {
                "enable": true,
                "mode": "repulse"
            },

            "resize": true
        },

        "modes": {
            "grab": {
                "distance": 200,

                "line_linked": {
                    "opacity": 1
                }
            },

            "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
            },

            "repulse": {
                "distance": 200
            },

            "push": {
                "particles_nb": 4
            },
            
            "remove": {
                "particles_nb": 2
            }
        }
    },

    "retina_detect": true
};


// Importing the library this way due to its architecture...
require('particles.js');


const VueParticles = {
    install(Vue, options) {
        console.log("Installing `VueParticle`...");
        
        // This function can be called within the `mounted` hook of every 
        // componenet that requires the functionality of `particles.js`. 
        Vue.prototype.$initVueParticles = (id) => {
            console.log("Starting `particles.js`.");
            
            if(document.getElementById(id) != null) {
                particlesJS(id, { ...particlesJSConfig, ...options });
            } else {
              console.error(`'VueParticle' cannot be initialized with id '${id}' because it does not exist on the document.`);  
            }

        }
    }
}

export default VueParticles;