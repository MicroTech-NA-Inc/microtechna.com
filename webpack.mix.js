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
    .options({
        processCssUrls: false
    })
    //.sourceMaps()
    .extract(['vue', 'jquery']);//always ON, except sourcemap

mix.copyDirectory('resources/images', 'public/images');
//mix.copy('resources/sass/slicknav.min.css', 'public/css/slicknav.min.css');
if (mix.inProduction()) {
mix.version();
}
mix.browserSync('http://localhost:8000');
