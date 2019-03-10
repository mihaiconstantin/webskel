<template>
    <aside id="app-contact-info" class="y row">
        
        <div class="p info-name col-12">
            <h4 class="s display-4"><span class="name-title text-muted">{{ item.prefix }}</span> {{ item.name }}</h4>
        </div>
        
        <div class="p info-position col-12">
            <span class="s lead">{{ item.position }}</span>
        </div>

        <div class="p info-affiliation separator col-12">
            <span class="s lead text-muted">{{ item.company }}</span>
            <span class="s lead text-muted">|</span>
            <span class="s lead text-muted">{{ item.department }}</span>
        </div>

        <div class="p info-links separator col-12">
            <a v-for="externalLink in item.external_links" :key="externalLink.id" :href="externalLink.anchor" target="_blank">
                <span class="s lead">{{ externalLink.text }}</span>
            </a>
        </div>

        <div class="p info-message col-12">
            <a :href="`mailto:${ item.email }?subject=Mail from website`" target="_blank">
                <span class="s lead effect-underline">Send a Message</span>
            </a>
        </div>

    </aside>
</template>



<script>
    export default {
        props: {
            item: Object
        }
    }
</script>



<style lang="scss" scoped>
    @import "../../sass/utils/variables";


    #app-contact-info {
        .info-name h4 {
            font-size: 3rem;
        }

        .info-links {
            a {
                display: block;
                text-decoration: none;
                color: $bootstrap-muted;

                &:hover {
                    color: $bootstrap-link;
                }
            }

            .lead {
                font-size: 1.1rem;
            }
        }

        .separator {
            &::after {
                content: '';
                display: block;
                height: 1px;
                border-bottom: 1px solid rgba($app-black-dark, .1);
                margin: 1rem auto;
            }
        }
    }
</style>
