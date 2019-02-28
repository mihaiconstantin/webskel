<template>
	<header id="app-blog-header" class="r col-12">
		
		<!-- Blog page title. -->
		<div class="p row">
			<div class="s app-blog-title text-center col-12">
				<h1 class="display-4">Blog</h1>
			</div>	
		</div>

		<!-- Post filtering. -->
		<div class="p row">

			<!-- Filter input. -->			
			<div v-if="totalPosts > 0" class="s app-blog-filter text-center col-md-7 mx-auto">
				<label class="sr-only" for="blogSearch">Filter:</label>
				<input v-model="filterText" id="blogSearch" class="form-control form-control-lg text-center" type="text" :placeholder="placeholderFilter">
				<p v-if="filterText.length > 0" class="s app-blog-filter-count small text-muted">{{ filterCounter }} {{ matchText }}</p>
			</div>

			<!-- Not found message. -->
			<div v-else class="p app-blog-empty text-center col-md-7 mx-auto">
				<p class="s app-blog-empty-message lead">{{ fetchingFeedback }}</p>
			</div>
            
		</div>

	</header>
</template>


<script>
	import { mapGetters } from 'vuex';


	export default {
        data() {
            return {
                placeholderFilter: "Posts will filter as you type...",
            }
        },


		computed: {
			...mapGetters([
				'totalPosts',
                'filterCounter',
                'fetchingStatus'
            ]),
            
			filterText: {
				get() {
					return this.$store.getters.filterText;
				},
				set(value) {
					this.$store.dispatch('setFilterText', value);
				}
            },
            
            matchText() 
            {
                return this.filterCounter == 1 ? 'match' : 'matches'
            },

            fetchingFeedback() {
                if (this.fetchingStatus) {
                    return 'Grabbing the latest posts...'
                } else {
                    if (this.totalPosts === 0) {
                        return 'Could not find any posts. :(';
                    }
                }
            }
		}
	}
</script>


<style lang="scss" scoped>
	#app-blog-header {
		margin-bottom: 1.5rem;

		.app-blog-filter,
		.app-blog-empty {
			margin: 1rem auto;

			.app-blog-filter-count,
			.app-blog-empty-message {
				margin: .5rem auto;
			}
		}
	}
</style>
