<?php

use Illuminate\Support\Facades\Route;

# when u visit the homepage, then run this function, which declares a view called welcome.
# Listen for the request to the homepage
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});

