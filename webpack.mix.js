const mix = require('laravel-mix');
require('laravel-mix-purgecss');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .purgeCss({
        whitelistPatterns: [/tooltip/, /fade/, /show/, /arrow/, /collaps/, /carousel/, /feedback/, /was-validated/],
    });

mix.browserSync('subvitamine.test');
