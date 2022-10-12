<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Kind;
use App\Models\Question;
use App\Models\User;
use App\Models\Video;
use App\Models\Vocabulary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VocabularyController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function showLevel()
    {
        $levels = Kind::get('level');
        // dd($levels->level = 1);
        return view('level', compact('levels'));
    }

    public function showKind($level)
    {

        $kinds = Kind::where('level', "=", $level)->get();
        return view('kind', compact('kinds'));
    }

    public function showVocabulary($id)
    {
        $vocabularies = Kind::join('vocabularies', 'kinds.id', '=', 'vocabularies.kind_id')
            ->where('kinds.id', '=', $id)
            ->get();
        return view('kind-detail', compact('vocabularies'));
    }

    public function showDetailVocabulary($id)
    {
        $vocabularies = Vocabulary::where('id', '=', $id)->get();
        return view('vocabulary-detail', compact('vocabularies'));
    }

    
}
