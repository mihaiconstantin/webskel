<template>
    <aside id="app-contact-social" class="y row">
        <a class="twitter-timeline" data-width="" :data-height="widgetHeight" :href="widgetLink">Tweets by @{{ username }}</a>
    </aside>
</template>



<script>
    export default {
        props: {
            height: {
                required: false,
                type: String
            },
            username: String
        },


        data() {
            return {
                widgetHeight: this.height == null ? 450 : this.height,
                widgetLink: `https://twitter.com/${this.username}`
            }
        },


        created() {
            this.$nextTick(() => {
                // Forcing the Twitter widget to initialize (i.e., https://dev.twitter.com/web/javascript/initialization).
                // twttr.widgets.load();
            });   
        }  
    }
</script>



<style lang="scss" scoped>
</style>