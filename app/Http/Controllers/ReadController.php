<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadController extends Controller
{
    public function index() {
        return view('read.index');
    }

    public function verseOfTheDay() {
        return view('read.verseOfTheDay');
    }

    public function show($id) {
        return view('read.show');
    }
}
