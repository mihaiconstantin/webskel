<template>
    <section id="app-carousel" class="r">
        
        <div id="vue-particles" :style="{ backgroundColor: item.color }" class="r row">
            
            <div class="p carousel-avatar drop">
                <img :src="revealPath(item.image, '/storage')" alt="Avatar Image" draggable="false" class="img-fluid rounded-circle pulse">
            </div>

            <div class="p carousel-information d-none d-lg-block text-center fade-in-right">
                <h2 class="display-4">{{ item.title }}</h2>
                <p class="lead">{{ item.content }}</p>
            </div>

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
            bottom: 2.5rem;
            width: 80%;
            left: 50%;
            margin-left: -40%;
            padding: 1.5rem 3rem;
            border-radius: 200px 0 200px 0;
            color: $app-white;
        }
    }

    #vue-particles {
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
