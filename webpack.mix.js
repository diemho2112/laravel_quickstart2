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

mix.sass('resources/assets/sass/_variables.scss','public/css')
    .sass('resources/assets/sass/app.scss', 'public/css');
mix.styles([
    'resources/assets/css/main.css'
], 'public/css/main.css');
mix.js([
    'resources/assets/js/app.js',
    'resources/assets/js/bootstrap.js',
], 'public/js/allscript.js').extract(['vue']);
mix.copy('node_modules/font-awesome/fonts/*.*', 'public/fonts/');
