const mix = require('laravel-mix');

mix.sass('public/site/css/scss/main.scss', 'public/site/css/style.css').options({
    processCssUrls: false,
    outputStyle: 'compressed'
});;

mix.scripts('public/site/js/niv', 'public/site/js/main.js');


// mix.browserSync({
//     proxy: 'https://niv_template.test',
//     host: 'niv_template.test'
// })

mix.browserSync({
    proxy: 'http://127.0.0.1:8000'
});
