let mix = require('laravel-mix');

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

// if (mix.config.production) {
//     mix.js('resources/assets/js/app.js', 'public/js')
//         .sass('resources/assets/sass/app.scss', 'public/css');
// } else {
    mix.js('resources/assets/js/app.js', 'public/js')
        .sass('resources/assets/sass/app.scss', 'public/css')
        .version();
// }

mix.copy('resources/assets/images/*', './public/images/');

mix.copy('resources/assets/favicon.ico', './public/images/favicon.ico');
mix.copy('resources/assets/images/fav/*', './public/images/fav/');

mix.copy('resources/assets/images/partners/*', './public/images/partners/');

