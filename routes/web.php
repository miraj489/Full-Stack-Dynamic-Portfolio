<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lp1', function () {
    return view('lp1');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/work', function () {
    return view('work');
});

Route::get('/contact', function () {
    return view('contact');
});

