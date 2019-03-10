<template>
	<section id="app-presentations" class="r" data-aos="fade">

		<div class="p col-12 text-left app-section-title" data-aos="fade-left">
			<h1 class="display-3">Presentations</h1>
		</div>

		<!-- Presentations. -->
		<div id="presentation-list" class="p row justify-content-center">
			<div class="s col-11">
				<div class="v d-flex flex-row justify-content-md-around flex-wrap">

					<div v-for="presentation in items" :key="presentation.id" class="o text-center col-sm-12 col-md-10 col-lg-4" data-aos="fade-down">
                        <div class="regularShadow card">
    
                            <img :src="revealPath(presentation.image, '/storage')" class="card-img-top" :alt="presentation.title">

                            <div class="card-body">
                                
                                <h4 class="card-title">{{ presentation.title }}</h4>

                                <div class="s presentation-meta d-block">
                                    <span class="small">
                                        <span class="meta-highlight"> {{ presentation.conference }}</span>
                                        <br>
                                        <span class="meta-highlight"> {{ presentation.city }}, {{ presentation.year }}</span>
                                    </span>
                                </div>

                                <p class="card-text">{{ shortenText(presentation.summary, 30) }}</p>
                                
                                <a :href="presentation.link" class="btn btn-project" role="button" target="_self">Read more &raquo;</a>
                            </div>
                        </div>
					</div>

				</div>
			</div>

            <div class="p col-12 text-center app-more-content">
                <a :href="linkMore == 'undefined' ? '#' : linkMore" class="btn btn-more" role="button" target="_self">See all presentations &raquo;</a>
            </div>
		</div>

	</section>
</template>



<script>
    import { imageMixin } from "../mixins/imageMixin.js";
    import { textMixin } from "../mixins/textMixin.js";
    
    
	export default {
		mixins: [
            imageMixin,
            textMixin
        ],
        

        props: {
            items: Array,
            linkMore: {
                required: false,
                type: String
            }
        }
	}
</script>



<style lang="scss" scoped>
    @import "../../sass/utils/variables";
    @import "../../sass/utils/mixins";

    
	#app-presentations {
        .app-section-title {
	    	margin-bottom: 1.5rem;
        }

        .app-more-content {
            margin-top: 1.5rem;

            .btn-more {
                @include app_button($app-client-white, #f1ebe4, $app-client-blue);
            }
        }
    }
    
    #presentation-list {
        color: $app-white;
        // background-color: $app-client-turquoise;
        background-color: #00819a;
        padding-top: 0;
        
        .card {
            border: 0;
            border-radius: .5rem;
            margin-top: 1.5rem;
            // background-color: $app-client-turquoise;
            background-color: #00819a;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);

            &:hover {
                @include material_shadow_md;

                .card-title {
                    color: $app-client-white;
                }

                .meta-highlight {
                    color: $app-client-white;
                }
            }

            .card-img-top {
                max-height: 300px;
            }

            .presentation-meta {
                margin-bottom: .5rem;
            }

            .btn-project {
                @include app_button($app-client-white, #f1ebe4, $app-client-blue);
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
