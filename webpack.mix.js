const mix = require('laravel-mix');

/* mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]); */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

mix.browserSync({
    proxy: 'http://dashboardMdb.test/',
    browser: 'Google Chrome',
    open: false
});

mix.disableNotifications();