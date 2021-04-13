<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReadController;

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

Route::get('/read', [ReadController::class, 'index']);

Route::get('/read/verseofday/', [ReadController::class, 'verseOfTheDay']);

Route::get('/read/{chapter}', [ReadController::class, 'show']);

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
