<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






//Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/read', function () {
    return view('read');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/verseofday', function () {
    return view('verseOfTheDay');
});