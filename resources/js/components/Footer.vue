<template>
	<footer id="app-footer" class="r col-12">

        <hr class="col-md-8 mx-auto">

		<!-- social link. -->
		<div class="p row">
			<div class="bs app-footer-social text-center col-12">
				<a :href="socialShareLink" target="_blank">
					<img :src="revealPath(socialIcon, '/storage')" alt="Social Icon" class="bk img-fluid">
				</a>			
			</div>
		</div>

		<!-- copyright. -->
		<div class="p row">
			<div class="bs app-footer-copyright text-center col-12">
				<p class="text-muted">Copyright &copy; {{ year }} <a :href="homeUrl">{{ copyright }}</a></p>
			</div>
		</div>

		<!-- Developer -->
		<div class="p row">
			<div class="bs app-page-footer-author text-center col-12">
				<p class="text-muted ">Website designed and created by <a href="https://constantinmihai.com" target="_blank">Mihai A. Constantin</a>.</p>
			</div>
		</div>

	</footer>
</template>



<script>
    import { imageMixin } from "../mixins/imageMixin.js";


	export default {
        mixins: [
            imageMixin
        ],

		props: [
            'socialIcon',
            'socialLink',
            'homeUrl',
            'copyright'
		],

		data() {
			return {
				year: new Date().getFullYear()
			}
		},

		computed: {
			socialShareLink() {
				return `${ this.socialLink }&url=${ window.location.href }`;			
			}
		}
	}
</script>



<style lang="scss" scoped>
    @import "../../sass/utils/variables";
    @import "../../sass/utils/mixins";


	#app-footer {
        margin-bottom: 1.5rem;

        hr {
            margin-top: 0;
            margin-bottom: 3rem;
        }

		.app-footer-social {
			margin-bottom: .5rem;

			img {
				width: 30px;
				filter: grayscale(80%);
				transition: all .5s;

				&:hover {
					filter: grayscale(0%);
					transform: rotate(360deg);
				}
			}
		}

		.app-footer-copyright {
			margin-bottom: .5rem;

			p {
				font-size: .8rem;
				margin-bottom: 0;
				text-align: center;
			}

			a {
				color: $app-emphasis;
				text-decoration: none;
			}
		}

		.app-page-footer-author {
			p {
				font-size: .8rem;
				margin-bottom: 0;
				text-align: center;
			}
		}
	}
</style>
