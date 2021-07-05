const mix = require('laravel-mix');


mix .scripts('node_modules/jquery/dist/jquery.js', 'public/site/js/jquery.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/site/js/bootstrap.bundle.js')
    

    .sass('node_modules/bootstrap/scss/bootstrap.scss','public/site/bs/bootstrap.css');
