const mix = require('laravel-mix');


mix 
    /*jQuery JS*/ 
    .scripts('node_modules/jquery/dist/jquery.js', 'public/site/js/jquery.js')

    /*Boostrap JS*/
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/site/js/bootstrap.bundle.js')
    
    /*Bootstrap Sass*/
    .sass('node_modules/bootstrap/scss/bootstrap.scss','public/site/bs/bootstrap.css')

    /* Font Awesome CSS */
    .styles('node_modules/@fortawesome/fontawesome-free/css/all.min.css','public/site/fa5/all.min.css');
