<?php

namespace App\Http\Controllers;

use App\Models\Kind;

class KindController extends Controller
{

    public function level()
    {
        $level1 = Kind::where('level', '=', 1)->first('level');
        $level2 = Kind::where('level', '=', 2)->first('level');
        //$level3 = Kind::where('level', '=', 3)->first('level');
        return response()->json([$level1, $level2]);
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
