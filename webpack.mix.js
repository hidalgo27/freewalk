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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css/admin');

mix.scripts([
    'node_modules/venobox/venobox/venobox.min.js',
    // 'node_modules/swiper/dist/js/swiper.min.js',
    // 'node_modules/vanilla-lazyload/dist/lazyload.min.js',
    // 'resources/js/vendor/megamenu.js'
    // 'node_modules/feather-icons/dist/feather.js',
], 'public/js/plugins.js');

//---js web

if (mix.config.inProduction) {
    mix.version();
}
