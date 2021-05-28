<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Route::get('v', function() {
//     $laravel = app();
//     return "Your Laravel version is ".$laravel::VERSION;
// });
