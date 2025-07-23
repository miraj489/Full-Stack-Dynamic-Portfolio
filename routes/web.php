<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;



Route::get('/', function () {
    return view('welcome');
});



//login route
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [AuthenticationController::class, 'login'])->name('login');


//register route
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [AuthenticationController::class, 'register'])->name('register');

// Logout route
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');

// Admin Dashboard (protected by authentication)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
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

