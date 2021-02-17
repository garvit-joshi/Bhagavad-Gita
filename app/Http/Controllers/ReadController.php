<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bhagavads;

class ReadController extends Controller
{
    public function index() {
        return view('read.index');
    }

    public function verseOfTheDay() {
        return view('read.verseOfTheDay');
    }

    public function show($id) {
        $bhagavad = Bhagavads::findOrFail($id); //DB-fetch

        return view('read.show', ['bhagavad' => $bhagavad]);
    }
}
