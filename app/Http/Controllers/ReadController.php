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
        $bhagavad_count = Bhagavads::all()->count();
        $id_no = mt_rand(1, $bhagavad_count);
        error_log($id_no);
        error_log($bhagavad_count);
        $bhagavad = Bhagavads::findOrFail($id_no);
        error_log($bhagavad);
        return view('read.verseOfTheDay', [
            'verse' => $bhagavad,
        ]);
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
            return redirect()->action([ReadController::class, 'verseOfTheDay']);
        }
        if( $bhagavad == "")
        {
            return redirect()->action([ReadController::class, 'verseOfTheDay']);
        }
        return view('read.show', ['bhagavad' => $bhagavad]);
    }
}
