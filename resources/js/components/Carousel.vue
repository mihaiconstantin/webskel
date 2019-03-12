<template>
    <section id="app-carousel" class="r">
        <div id="carousel-canvas" class="b row" :style="[baseStyle, overlayStyle]" :class="{'carousel-overlay': this.item.overlay_display == 1}">
            
            <div class="p carousel-avatar drop">
                <img :src="revealPath(item.avatar, '/storage')" alt="Avatar Image" draggable="false" class="img-fluid rounded-circle pulse">
            </div>


            <div class="p carousel-information d-none d-lg-block text-center fade-in-right">
                <h2 class="display-4">{{ item.title }}</h2>
                <p class="lead">{{ item.content }}</p>
            </div>


            <a href="#app-about" class="smooth-scrollable carousel-scroll scroll-arrow scroll-arrow-position-bottom scroll-arrow-direction-bottom slide-scroll-bounce" draggable="false"></a>
            
        </div>
    </section>
</template>



<script>
    import { imageMixin } from '../mixins/imageMixin.js';


    export default {
        mixins: [
            imageMixin
        ],


        props: {
            item: Object
        },


        mounted() {
            this.$nextTick(() => {
                if (this.item.network_display == 1) {
                    this.configureNetwork();
                    this.startNetwork('carousel-canvas');

                    // In case we want the nework to be on top of the overlay.
                    // document.getElementsByClassName('particles-js-canvas-el')[0].style.zIndex = 0;  
                }
            });
        },


        computed: {
            baseStyle() {
                if(this.item.image_display == 0) {
                    return {
                        'background-color': this.item.background_color
                    }
                } else {
                    return {
                        'background-image': `url("${this.item.image}")`,
                    }
                }
            },

            overlayStyle() {
                return {
                    '--overlay-color': this.item.overlay_color,
                    '--overlay-opacity': this.item.overlay_opacity,
                }
            }
        },


        methods: {
            configureNetwork() {
                this.$vueParticlesConfig.particles.color.value = this.item.node_color;
                this.$vueParticlesConfig.particles.opacity.value = this.item.node_opacity;
                this.$vueParticlesConfig.particles.line_linked.color = this.item.edge_color;
                this.$vueParticlesConfig.particles.line_linked.opacity = this.item.edge_opacity;
            },

            startNetwork(id) {
                this.$initVueParticles(id);
            }
        }
    }
</script>



<style lang="scss" scoped>
    @import "../../sass/utils/variables";
    @import "../../sass/utils/mixins";


    #app-carousel {
        margin-bottom: 0;
        padding-bottom: 0;
        user-select: none;
        
        .carousel-avatar, .carousel-information {
            z-index: 1;
        }

        .carousel-avatar {
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -50%);
            visibility: hidden;
                    
            @keyframes drop {
                from {
                    visibility: hidden;
                    opacity: 0;
                    top: 10%;
                }
                to {
                    visibility: visible;
                    opacity: 1;
                    top: 40%;
                }
            }

            img {
                @include material_shadow_md;
                width: 400px;
            }
        }

        .carousel-information {
            @include material_shadow_md;
            position: absolute;
            bottom: 4rem;
            width: 80%;
            left: 50%;
            margin-left: -40%;
            padding: 1.5rem 3rem;
            border-radius: 200px 0 200px 0;
            color: $app-white;
        }

        .carousel-scroll {
            transition: color 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);

            &:hover {
                color: $app-accent;
            }
        }

        .carousel-overlay {
            &:before {
                content: '';
                position: absolute;
                left: 0;
                right: 0;
                bottom: 0;
                top: 0;
                
                // For backwards compatibility with IE 11.
                background: $app-primary-dark;
                opacity: .5;

                // For modern browsers.
                background: var(--overlay-color);
                opacity: var(--overlay-opacity);
            }
        }
    }

    #carousel-canvas {
        width: 100vw;
        height: 100vh;
        background-size: cover;
    }

    @media (max-width: 991.98px) {
        #app-carousel {
            .carousel-avatar {
                top: 10%;

                @keyframes drop {
                    from {
                        visibility: hidden;
                        opacity: 0;
                        top: 10%;
                    }
                    to {
                        visibility: visible;
                        opacity: 1;
                        top: 50%;
                    }
                }
            }
        }
    }

    .drop {
        animation: drop 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86);
        animation-delay: 1.5s;
        animation-fill-mode: forwards;
    }
</style>
