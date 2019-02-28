<template>
    <div id="app-navigation">
        <nav id="navbar" class="r navbar navbar-expand-sm fixed-top navbar-light bg-app-navbar" 
            :data-aos="anchorTrigger ? 'fade' : false" 
            :data-aos-anchor="anchorTrigger">

			<a v-if="navLogo" class="bg navbar-brand" href="#app-carousel">
				<img :src="revealPath(navLogo, 'storage/img')" alt="Navigation Logo" class="img-fluid">
			</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler" aria-controls="navbar-toggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div :class="navLogo ? 'justify-content-end' : 'justify-content-center'" class="p collapse navbar-collapse" id="navbar-toggler">
                <ul id="link-list" class="p navbar-nav">
                    <li 
                        v-for="link in links" :key="link.id"
                        @click="collapseBurgerMenu"
                        :class="{ active: isActive(link.text) }"
                        class="s nav-item">

                        <a :href="link.anchor" class="nav-link">{{ link.text }}</a>
                    </li>
                </ul>
            </div>

        </nav>
    </div>
</template>



<script>
    import { imageMixin } from '../mixins/imageMixin.js';


    export default {
        mixins: [
            imageMixin,
        ],


        props: {
            links: Array,
            logo: {
                required: false,
                type: String
            },
            active: {
                required: false,
                type: String
            },
            
            // `trigger` prop is used to control the navbar animation on scroll.
            trigger: {
                required: false,
                type: String
            },
            
            // `activeScroll` prop is used for setting the active class on navbar links based on the scroll position.
            activeScroll: {
                required: false,
                type: String
            }
        },



        data() {
            return {
                activeLink: this.active == null ? false : this.active,
                navLogo: this.logo == null ? false : this.logo,
                anchorTrigger: this.trigger == null ? false : this.trigger
            }
        },



        created() {
			this.$nextTick(function () {
                if (this.activeScroll != null) {
                    window.addEventListener('scroll', this.setActiveOnScroll);
                }
			});
		},



		destroyed() {
            if (this.activeScroll != null) {
			    window.removeEventListener('scroll', this.setActiveOnScroll);
            }
        },



        methods: {
            isActive(link) {
                return this.activeLink === link;
            },


            collapseBurgerMenu() {
                $('.navbar-collapse').collapse('hide');
            },


            setActiveOnScroll() {
                // Getting the offset details of the sections based on the href value (i.e., section id).
				let offsets = this.determineSectionsOffset(this.links, [
                    { text: "", anchor: "#app-carousel" }
                ]);

				// Get the current scrollbar position (i.e., 350 is an arbitrary offset).
				let scrollBarPosition = (window.pageYOffset || document.documentElement.scrollTop) + 250;

				// Check which section is currently on scroll scope and set 'activeLink' to the corresponding name of that section.
				offsets.forEach((section) => {
					if (section.offset <= scrollBarPosition && section.offset + section.height > scrollBarPosition) {
						this.activeLink = section.name;
					} 
                });    
            },


            determineSectionsOffset(linksArray, extraLinks = []) {
                let details = [];
                
                // The array of extra links helps with unsetting the name of the active link when scrolling over that particular anchor link, 
                // that may not necessarily be part of the menu.                
                linksArray = [ ...linksArray, ...extraLinks ];

				linksArray.forEach((link) => {
                    if (link.anchor.charAt(0) === "#") {
                        // Removing the '#' from the 'href' property (i.e., from '#app-about' to 'app-about').
                        let id = link.anchor.substr(1);

                        // Fetch the section corrsponding to that id.
                        let section = document.getElementById(id);

                        // Fetch section scroll position (i.e., offset from top) and height.
                        let offset = section.offsetTop;
                        let height = section.clientHeight;

                        // Store the details for each section, as objects, into an array.
                        details.push({ id, offset, height, name: link.text });
                    }
				});

				return details;
			}
        }
    }
</script>



<style lang="scss" scoped>
    @import "../../sass/utils/variables";
    @import "../../sass/utils/mixins";
    

    .bg-app-navbar {
        @include material_shadow_md;
        background-color: $app-bg-navbar;
        transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
    }

    .navbar-brand {
        img {
            height: 35px;
        }
    }

    .active {
        font-weight: 500;
        
        a {
            color: $app-client-blue !important;
        } 
    }

    // Underline effect for the menu items. Only form 'md' and larger.
    @media (min-width: 576px) {
        nav {
            li {
                position: relative;

                &:before {
                    content: '';
                    height: 2px;
                    position: absolute; 
                    left: 0; 
                    right: 100%; 
                    bottom: 10%;
                    background-color: $app-client-turquoise;
                    transition: right 0.3s ease;
                    z-index: -1;
                }

                &:hover {
                    &:before {
                        right: 0%;
                    }
                }
            }
        }
    }
</style>

