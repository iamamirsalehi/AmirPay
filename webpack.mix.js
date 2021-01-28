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

    mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
        require('postcss-custom-properties')
    ]);


    mix.combine('resources/css/css/*.css', 'public/dashboard/css/admin.min.css');

    mix.combine('resources/scss/*.scss', 'public/dashboard/scss/admin.min.scss');

    mix.combine([
        'resources/js/build/js/*.js'
    ], 'public/dashboard/js/admin_build.min.js');

    mix.combine([
        'resources/js/dist/js/*.js',
        'resources/js/dist/js/pages/dashboard2.js',
    ], 'public/dashboard/js/admin_dist.min.js');
