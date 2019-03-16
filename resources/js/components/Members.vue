<template>
	<section id="app-members" class="r" data-aos="fade">

		<div class="p col-12 text-left app-section-title" data-aos="fade-left">
			<h1 class="display-3">Members</h1>
		</div>

		<!-- Members. -->
			<!-- <div class="bg col-10">
				<div class="bw d-flex flex-row align-items-center justify-content-md-around flex-wrap bottom-enter">
					<a v-for="person in items" :key="person.id" v-if="person.role == 'employee'" :href="person.link" class="bp col-md-4 text-center tesc-collaborator">
						<img :src="revealPath(person.image, '/storage')" :alt="person.name" class="rounded-circle" width="140" height="140">
						<h2>{{ person.name }}</h2>
						<p>{{ person.description }}</p>
					</a>
				</div>
			</div> -->

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

    
	#app-members {
        .app-section-title {
	    	margin-bottom: 1.5rem;
        }
    }
</style>
