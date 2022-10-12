<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Video;

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
}
