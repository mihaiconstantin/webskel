const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

 // Entry for the index page of the home controller (i.e., the landing page).
 mix.js('resources/js/home.js', 'public/js/home_index.js')
 .sass('resources/sass/home.scss', 'public/css/home_index.css');
 

 // Entry for the index page of the blog controller.
mix.js('resources/js/blog.js', 'public/js/blog_index.js')
   .sass('resources/sass/blog.scss', 'public/css/blog_index.css');
