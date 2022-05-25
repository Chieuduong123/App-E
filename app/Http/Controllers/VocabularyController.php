<?php

namespace App\Http\Controllers;

use App\Models\Vocabulary;
use Illuminate\Http\Request;

class VocabularyController extends Controller
{
    public function showVocabulary($id)
    {
        $vocabulary = Vocabulary::where('kind_id', $id)->select('word', 'id')->get();
        if ($vocabulary->isEmpty()) {
            return response()->json(['error' => 'Model not found'], 404);
        }
        return response()->json($vocabulary);
    }

    public function detailVocabulary($id)
    {
        $vocabulary = Vocabulary::where('id', $id)
            ->select('id', 'kind_id', 'word', 'type_word', 'phonetic', 'audio', 'definition')
            ->get();
        if ($vocabulary->isEmpty()) {
            return response()->json(['error' => 'Model not found'], 404);
        }
        return response()->json($vocabulary);
    }

    public function getSearchVocabulary(Request $request)
    {
        $data = $request->get('data');
        $search_vocabulary = Vocabulary::where('word', 'like', "%{$data}%")
            ->select('word', 'type_word', 'phonetic', 'audio', 'definition')
            ->get();
        return response()->json(['data' => $search_vocabulary]);
    }
}
