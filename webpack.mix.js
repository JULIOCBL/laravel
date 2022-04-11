const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.js('resources/js/lightslider.js', 'public/assets/js');
 mix.js('resources/js/scripts.js', 'public/assets/js');
 mix.js('resources/js/slider.js', 'public/assets/js');
 
 
 
 mix.postCss('resources/css/all.css', 'public/assets/css', []);
 mix.postCss('resources/css/normalize.css', 'public/assets/css', []);
 mix.postCss('resources/css/home.css', 'public/assets/css', []);
 mix.postCss('resources/css/carrito.css', 'public/assets/css', []);
 mix.postCss('resources/css/lightslider.css', 'public/assets/css', []);
 mix.copyDirectory('resources/img', 'public/assets/img');