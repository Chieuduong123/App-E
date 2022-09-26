<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kind;
use App\Models\Video;
use App\Models\Vocabulary;

class HomeController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function showVideo()
    {
        $videos = Video::orderByDesc('id')->get();
        return view('video', compact('videos'));
    }

    public function showLevel()
    {
        $levels = Kind::get('level');
        // dd($levels->level=1);
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
}
