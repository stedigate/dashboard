<?php

use Illuminate\Support\Facades\Route;

Route::get('/price', function () {
    return view('price');
});

Route::get('/term-of-use', function () {
    return view('term-of-use');
});

Route::get('/cookie-policy', function () {
    return view('cookie-policy');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/', function () {
    return view('welcome');
});
