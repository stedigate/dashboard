<?php

use Illuminate\Support\Facades\Route;

Route::get('/price', function () {
    return view('price');
});

Route::get('/', function () {
    return view('welcome');
});
