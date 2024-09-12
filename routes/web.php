<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');  // Home page
})->name('home');

Route::get('/about', function () {
    return view('about');  // About Us page
})->name('about');

Route::get('/services', function () {
    return view('services');  // About Us page
})->name('services');
