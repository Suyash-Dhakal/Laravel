<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/About', function () {
    return view('about');
});

Route::get('/Post', function () {
    return view('post');
});
