<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/products', function () {
    return view('pages.products');
});


Route::get('/login', function () {
    return view('pages.login');
});
