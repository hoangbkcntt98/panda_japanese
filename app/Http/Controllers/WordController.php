<?php

namespace App\Http\Controllers;

use App\Models\Kanji;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WordController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->get('limit') ?? 50;
        $page = $request->get('page') ?? 0;

        $words = Kanji::skip($page * $limit)->take($limit)->get();
        $res = [];
        foreach ($words as $word) {
            
            foreach (Kanji::getColumns() as $column) {
                $temp[$column] = $word[$column];
            }
            $temp['topicName'] = $word->topic_name;
            $temp['sampleWords'] = $word->sample_words;
            $res[] = $temp;
        }
        
        return Inertia::render('Word/WordList', ['words' => $res]);
    }
}
