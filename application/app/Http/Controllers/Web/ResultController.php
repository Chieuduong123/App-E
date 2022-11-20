<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        if (auth()->user()->is_admin == true) {
            return view('admin.result-quiz')->with('results', Result::join('quizzes', 'results.quiz_id', 'quizzes.id')
                ->join('users', 'results.user_id', '=', 'users.id')
                ->get());
        }
        return view('user.result-page')->with('results', Result::join('quizzes', 'results.quiz_id', 'quizzes.id')
            ->where('user_id', auth()->user()->id)->get());
    }
}
