let mix = require('laravel-mix');


mix.setPublicPath( './' );
mix.scripts([
    'public/js/variables.js',
    'public/js/functions.js'
], 'public/js/app.js');
mix.js('resources/assets/js/app.js', 'public/js').version();
mix.sass('resources/assets/sass/app.scss', 'public/css').version();
