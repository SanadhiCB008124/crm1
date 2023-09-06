const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/build/assets/js')
   .sass('resources/css/app.scss', 'public/build/assets/css')
