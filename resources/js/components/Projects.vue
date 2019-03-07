<template>
	<section id="app-projects" class="r">

		<div class="p col-12 text-left app-section-title" data-aos="fade-left">
			<h1 class="display-3">Projects</h1>
		</div>

		<!-- Projects. -->
		<div id="project-list" class="p row justify-content-center">
			<div class="s col-11">
				<div class="v d-flex flex-row justify-content-md-around flex-wrap">

					<div v-for="project in items" :key="project.id" 
                        :data-aos="conditionalRender(project.featured, 'zoom-in-up', 'fade-up')"
                        :class="conditionalRender(project.featured, 'col-md-6', 'col-xl-4')" 
                        class="o text-center">
                        
                        <div :class="conditionalRender(project.featured, 'featuredShadow', 'regularShadow')" class="card">
                            
                            <div class="card-body">
                                
                                <span v-if="project.featured == 1" class="s app-card-star app-start-right">&#9733;</span>

                                <h4 class="card-title">{{ project.title }}</h4>

                                <div class="s project-meta d-block">
                                    <span class="small">
                                        Grant:<span class="meta-highlight"> {{ project.grant }}</span> |
                                        Duration:<span class="meta-highlight"> {{ project.duration }}</span>
                                    </span>
                                </div>

                                <p class="card-text">{{ project.featured == 1 ? shortenText(project.description, 150) : shortenText(project.description, 50) }}</p>
                                
                                <a :href="project.link" class="btn btn-project" role="button" target="_self">Read more &raquo;</a>
                            </div>
                        </div>
					</div>

				</div>
			</div>

            <div class="p col-12 text-center app-more-content">
                <a :href="linkMore == 'undefined' ? '#' : linkMore" class="btn btn-more" role="button" target="_self">See all projects &raquo;</a>
            </div>
		</div>

	</section>
</template>



<script>
    import { textMixin } from "../mixins/textMixin.js";
    
    
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
        }
	}
</script>



<style lang="scss" scoped>
    @import "../../sass/utils/variables";
    @import "../../sass/utils/mixins";

    
	#app-projects {
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
    
    #project-list {
        color: $app-white;
        background-color: $app-client-turquoise;
        padding-top: 0;
        
        .card {
            border: 0;
            border-radius: 0.5rem;
            margin-top: 1.5rem;
            background-color: $app-client-turquoise;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);

            &:hover {
                @include material_shadow_md;

                .card-title, .meta-highlight {
                    color: $app-client-white;
                }
            }

            .project-meta {
                margin-bottom: 0.5rem;
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
