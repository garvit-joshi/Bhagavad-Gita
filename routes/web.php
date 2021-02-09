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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/read', function () {
    $verse= [
        'Chapter' => '1',
        'Verse' => '1',
        'Translation' => 'Dhritarastra said: O Sanjaya, what did my sons and the sons of Pandu actually do when, eager for battle, they gathered together on the holy field of Kuruksetra?'
    ];
    return view('read',$verse);
});

Route::get('/contact', function () {
    return view('contact');
});