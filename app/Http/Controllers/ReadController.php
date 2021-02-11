<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadController extends Controller
{
    //
    public function index() {
        return view('read');
    }

    public function show() {
        return view('verseOfTheDay');
    }
}
