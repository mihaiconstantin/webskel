<template>
    <section id="app-about" class="r">

        <div class="p col-12 text-left app-section-title" data-aos="fade-left">
            <h1 class="display-3">About</h1>
        </div>


        <!-- Abouts. -->
        <div id="about-list" class="p row justify-content-center">
            <div class="col-11">

                <div v-for="about in items" :key="about.id" 
                                                            :class="conditionalRender(
                                                                itExistsAndIsApproved(about.image, about.image_display), 
                                                                    conditionalRender(about.image_position == 'left', 'justify-content-end', 'justify-content-start'
                                                                ), 'justify-content-center')" 

                                                            :style="itExistsAndIsApproved(about.image, about.image_display) ? { 
                                                                                                                                backgroundImage: revealUrlPath(about.image, 'storage/img'),  
                                                                                                                                backgroundPosition: about.image_position == 'left' ? '5% 50%': '95% 50%'
                                                                                                                              } : {}" 

                                                            class="g about-content row">

                    <div :data-aos="conditionalRender(about.animation !== 'off', about.animation, false)" class="s about-text col-xl-8">
                        <p class="s lead" v-html="about.content"></p>
                    </div>
                </div>

            </div>
        </div>

    </section>
</template>



<script>
    import { imageMixin } from '../mixins/imageMixin.js';
    import { textMixin } from "../mixins/textMixin.js";


    export default {
        mixins: [
            imageMixin,
            textMixin
        ],


        props: {
            items: Array
        }
    }
</script>



<style lang="scss" scoped>
    @import "../../sass/utils/mixins";


    #app-about {
        .app-section-title {
            margin-bottom: 1.5rem;
        }
    }

    #about-list {
        .about-content {
            background-repeat: no-repeat;
            background-size: contain;
            
            &:not(:last-of-type) {
                margin-bottom: 3rem;
            }

            .about-text {
                @include material_shadow_md;
                border-radius: .5rem;
                padding: 1rem;
                background-color: rgba(255, 255, 255, 0.9);

                .lead {
                    font-size: 1.2rem;
                    line-height: 1.6;
                    margin-bottom: 0;
                }

                h2 {
                    font-size: 3.3rem;
                }
            }
        }
    }
</style>




