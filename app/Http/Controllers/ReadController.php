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

    public function show($chapter) {
        $verse = request('verse');
        if($verse == "")
        {
            $bhagavad = Bhagavads::where('chapter', $chapter)->get();
            return view('read.verse', [
                'verse_array' => $bhagavad,
            ]);
        }
        try
        {
            $bhagavad = Bhagavads::where('verse', $verse)
            ->where('chapter', $chapter)
            ->first();
        }
        catch(\Illuminate\Database\QueryException $ex)
        {
            return view('read.verseOfTheDay');
        }
        if( $bhagavad == "")
        {
            return view('read.verseOfTheDay');
        }
        return view('read.show', ['bhagavad' => $bhagavad]);
    }
}
