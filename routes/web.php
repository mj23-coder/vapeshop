<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');  // Home page
})->name('home');

Route::get('/about', function () {
    return view('about');  // About Us page
})->name('about');
