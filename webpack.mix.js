
const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js').sass('resources/sass/app.sass','public/css').sass('resources/sass/main.scss','public/css');
