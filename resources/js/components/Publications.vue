<template>
    <section id="app-publications" class="r" data-aos="fade">

        <div class="p col-12 text-left app-section-title" data-aos="fade-left">
            <h1 class="display-3">Publications</h1>
        </div>

        <!-- Publications. -->
        <div id="publication-list" class="p row justify-content-center">
            <div class="s col-11">
                <div class="v d-flex flex-row justify-content-md-around flex-wrap">
                    
                    <div v-for="publication in items" :key="publication.id" 
                                                      :class="conditionalRender(publication.featured, 'col-md-6', 'col-xl-4')" 
                                                      :data-aos="conditionalRender(publication.featured, 'zoom-in-up', 'fade-up')" 
                                                      class="o">
                        <div :class="conditionalRender(publication.featured, 'featuredShadow', 'regularShadow')" class="card">
                            <div class="card-body">

                                <span v-if="publication.featured == 1" class="s app-card-star app-start-right">&#9733;</span>
                                
                                <h4 class="card-title text-center">{{ publication.title }}</h4>

                                <div class="s publication-meta d-block text-center">
                                    
                                    <span class="small">
                                        <span class="text-muted">Year:</span> {{ publication.year }} | 
                                        <span class="text-muted">Journal:</span> {{ publication.journal }} | 
                                        <span class="text-muted">Status:</span> {{ publication.status }}
                                    </span>
                                    
                                    <br>
                                    
                                    <span v-if="publication.featured == 1" v-html="publication.authors" class="small"></span>
                                </div>

                                <p class="card-text">{{ publication.featured == 1 ? shortenText(publication.abstract, 150) : shortenText(publication.abstract, 50) }}</p>

                                <a :href="prepareLink(publication.link)" class="btn btn-publication" role="button" target="_self">Read more &raquo;</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="p col-12 text-center app-more-content">
                <a :href="linkMore == 'undefined' ? '#' : linkMore" class="btn btn-more" role="button" target="_self">See all publications &raquo;</a>                
            </div>
        </div>

    </section>
</template>



<script>
    import { textMixin } from '../mixins/textMixin.js';    


    export default {
        mixins: [
            textMixin
        ],


        props: {
            items: Array,
            linkMore: {
                required: false,
                type: String
            }
        },


        methods: {
            isFeatured(featured) {
                return featured == 1 ? 'col-md-6' : 'col-md-4';
            },

            prepareLink(slug) {
                return `/blog/post/${slug}`;
            }
        }
    }
</script>



<style lang="scss" scoped>
    @import "../../sass/utils/variables";
    @import "../../sass/utils/mixins";


    #app-publications {
        .app-section-title {
            margin-bottom: 1.5rem;
        }

        .app-more-content {
            margin-top: 1.5rem;
        }

        .btn-publication, .btn-more {
                @include app_button($app-secondary, $app-accent, $app-white, $app-emphasis);
        }
    }
    
    #publication-list {
        background-color: $app-white-light;
        padding-top: 0;

        .card {
            border: 0;
            border-radius: .5rem;
            margin-top: 1.5rem;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            
            &:hover {
                @include material_shadow_md;
                
                .card-title {
                    transition: color 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
                    color: $app-secondary-dark;
                }

                .app-card-star {
                    transition: transform 1.5s cubic-bezier(0.25, 0.8, 0.25, 1);
                    transform: rotate(360deg);
                }
            }

            .app-card-star {
                color: $app-secondary;
            }

            .publication-meta {
                margin-bottom: .5rem;
            }
        }
    }

    .featuredShadow {
        @include material_shadow_md;
    }

    .regularShadow {
        @include material_shadow_sm;
    }
</style>
