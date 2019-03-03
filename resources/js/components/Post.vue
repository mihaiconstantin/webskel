<template>
    <div data-aos="zoom-in-down">
        <div id="app-post" class="g card">
            <div class="y card-body">
                <!-- Featured star. -->
                <span v-if="post.featured == 1" class="s post-featured-star">&#9733;</span>

                <!-- Post title. -->
                <h5 class="s post-title card-title text-center">{{ post.title }}</h5>

                <!-- Post details. -->
                <p class="s post-details card-text text-center">
                    <small class="text-muted">
                        <time class="p post-time" :datetime="post.created_at.timestamp" pubdate>{{ post.created_at.formatted }}</time> in 
                        <span class="p post-category"><a :href="makeUrl('category', post)">{{ post.category.name }}</a></span>
                        <br>by
                        <span class="p post-author"><a :href="makeUrl('user', post)">{{ post.user.name }}</a></span>
                    </small>
                </p>
                
                <!-- Post image. -->
                <img v-if="itExists(post.image)" :src="revealPath(post.image, '/storage')" :alt="post.meta_title" class="o post-image card-img-top">
                
                <!-- Post excerpt. -->
                <p class="t post-excerpt card-text">{{ post.excerpt }}</p>
                
                <hr>

                <!-- Post footer. -->
                <footer class="i post-footer text-right">
                    <a :href="makeUrl('post', post)" class="btn btn-sm btn-read">Read More &raquo;</a>
                </footer>
            </div>
        </div>
    </div>
</template>



<script>
	import { imageMixin } from '../mixins/imageMixin';

	export default {
        mixins: [
			imageMixin
		],
        
        
        props: [
			'post'
		],

		
		data() {
			return {
				baseUrls: {
					category: '/blog/category/',
					user: '/blog/author/',
					post: '/blog/post/'
				}
			}
		},


		methods: {
			makeUrl(type, post) {
				if (type === 'category') {
					return `${this.baseUrls.category}${post.category.slug}`
				} 
				else if(type === 'user') {
					return `${this.baseUrls.user}${post.user.id}`
				}
				else if(type === 'post') {
					return `${this.baseUrls.post}${post.slug}`
				} 
				else {
					return '#';
				}
			}
		}
	}
</script>



<style lang="scss" scoped>
    @import "../../sass/utils/variables";
    @import "../../sass/utils/mixins";


	#app-post {
		@include card_shadow_sm;
		position: relative;
		border-radius: .5rem;
		margin-bottom: 1.25rem;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);

		&:hover {
            @include card_shadow_md;
            
			.post-featured-star {
				color: $app-client-yellow;
			}
		}

		.post-featured-star {
			font-size: 1rem;
			color: $app-client-blue;
			position: absolute;
			text-align: center;
			right: 5px;
			top: 0px;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
		}

		.post-title,
		.post-details,
		.post-image,
		.post-excerpt {
			margin: 0 0 .5rem 0;
		}

		.post-details {
			a {
				color: $app-client-blue;
			}
		}

		.post-footer {
			.btn-read {
                @include app_button;
			}
		}
	}
</style>
