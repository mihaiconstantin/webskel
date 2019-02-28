<template>	
    <div id="app-post-list" class="r col-12 mx-auto">
    
        <!-- Post list. -->
        <div class="p row">
            <div class="s app-posts card-columns col-12" data-aos="fade-up">
                <app-post v-for="post in filteredPosts" :key="post.id" :post="post"></app-post>
            </div>
        </div>

        <!-- Future things (e.g., a sidebar). -->
    </div>
</template>



<script>
    import { mapGetters } from 'vuex';
    import { imageMixin } from "../mixins/imageMixin.js";
    import Post from './Post.vue';

    export default {
        mixins: [
            imageMixin			
        ],


        components: {
            'app-post': Post
        },


        computed: {
             ...mapGetters([
                'filteredPosts'
            ])
        },


        watch: {
            filteredPosts(posts) {
                this.$store.dispatch('setFilterCounter', posts.length);
            }
        }
    }
</script>



<style lang="scss" scoped>
    #app-post-list {
        margin-bottom: 1.75rem;

        @media (min-width: 768px) and (max-width: 991.98px) {
            .card-columns {
                column-count: 2;
            }
        }	
        
        @media (max-width: 767.98px) {
            .card-columns {
                column-count: 1;
            }
        }
    }
</style>
