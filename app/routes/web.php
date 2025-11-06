<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;

Route::get('/', function () {
    return view('welcome');
});

// Home page route
Route::get('/', [HomePageController::class, 'index'])->name('home');

// About page route
Route::get('/about', [HomePageController::class, 'about'])->name('about');

// Contact page route
Route::get('/contact', [HomePageController::class, 'contact'])->name('contact');
