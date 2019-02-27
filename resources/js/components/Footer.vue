<template>
	<footer id="app-footer" class="r col-12">

        <hr class="col-md-2 mx-auto">

		<!-- social link. -->
		<div class="p row">
			<div class="bs app-footer-social text-center col-12">
				<a :href="twitterShareLink" target="_blank">
					<img :src="twitterIcon" alt="Twitter Icon @angecramer" class="bk img-fluid">
				</a>			
			</div>
		</div>

		<!-- copyright. -->
		<div class="p row">
			<div class="bs app-footer-copyright text-center col-12">
				<p class="text-muted">Copyright &copy; {{ year }} <a :href="homeUrl">Angélique Cramer</a></p>
			</div>
		</div>

		<!-- Developer -->
		<div class="p row">
			<div class="bs app-page-footer-author text-center col-12">
				<p class="text-muted ">Website designed and created by <a href="https://constantinmihai.com" target="_blank">Mihai A. Constantin</a> (i.e., except the color scheme).</p>
			</div>
		</div>

	</footer>
</template>



<script>
	export default {
		props: [
            'twitterIcon',
            'homeUrl'
		],

		data() {
			return {
				year: new Date().getFullYear()
			}
		},

		computed: {
			twitterShareLink() {
				return `https://twitter.com/intent/tweet?text=Check%20out&via=angecramer&url=${window.location.href}`;			
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
					transform:rotate(360deg);
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
				color: $app-black;
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














