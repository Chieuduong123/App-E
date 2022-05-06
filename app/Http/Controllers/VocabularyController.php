<?php

namespace App\Http\Controllers;

use App\Models\Vocabulary;

class VocabularyController extends Controller
{
    public function showVocabulary($id)
    {
        $vocabulary = Vocabulary::where('kind_id', $id)->get('word'); 
        if ($vocabulary->isEmpty()) {
            return response()->json(['error' => 'Model not found'], 404);
        }
        return response()->json($vocabulary);
    }

    public function detailVocabulary($id)
    {
        $vocabulary = Vocabulary::where('id', $id)->select('word', 'type_word', 'phonetic', 'audio', 'definition')->get();
        if ($vocabulary->isEmpty()) {
            return response()->json(['error' => 'Model not found'], 404);
        }
        return response()->json($vocabulary);
    }
}
