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

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

mix.js('resources/js/app.js', 'public/js')
.vue();

mix.js('resources/js/app.js', 'public/js')
   .babelConfig({
       plugins: ['@babel/plugin-syntax-dynamic-import'],
   })
   .vue();


   
//    mix.js('resources/js/app.js', 'public/js')
//    .vue({ version: 3 })
//    .postCss('resources/css/app.css', 'public/css', [
//        require("tailwindcss"),
//    ]);

mix.browserSync('127.0.0.1:8000');

// webpack.mix.js



