<template>
	<section id="app-contact" class="r">

		<div class="p col-12 text-left app-section-title">
			<h1 class="display-3">Contact</h1>
		</div>


        <!-- Contact content. -->
        <div id="contact-content" class="p row justify-content-center">
            <div class="s col-11">
                <div class="o content row align-items-center">
                    
                    <!-- Contact info. -->
                    <div id="contact-info" class="g col-lg-4" data-aos="zoom-in-down">
                        <slot name="info"></slot>
                    </div>
                    
                    <!-- Social feed. -->
                    <div id="contact-social" class="g col-lg-8">
                        <slot name="social"></slot>
                    </div>

                </div>
            </div>
        </div>

	</section>
</template>




<script>
	export default {}
</script>



<style lang="scss" scoped>
    @import "../../sass/utils/mixins";


	#app-contact {
        .app-section-title {
            margin-bottom: 1.5rem;
        }
    }

    #contact-info, #contact-social {
        aside {
            @include material_shadow_md;
            margin: 0;
            padding: 1rem;
            border-radius: .5rem;
        }
    }

    @media (max-width: 991px) {
        #contact-info {
            margin-bottom: 1.5rem;
        }
    }
</style>
