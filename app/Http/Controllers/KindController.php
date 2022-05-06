<?php

namespace App\Http\Controllers;

use App\Models\Kind;

class KindController extends Controller
{

    public function level()
    {
        $level = Kind::get('level');
        return response()->json($level);
    }

    public function showLevel($level)
    {
        $level = Kind::where('level', $level)->get('kind_name')->groupBy('level');
        return response()->json($level);
    }

    // public function kind()
    // {
    //     $kinds = Kind::get('kind_name');
    //     return response()->json($kinds);
    // }
}
