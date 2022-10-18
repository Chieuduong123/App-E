<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{

    public function showQuestion()
    {
        $showQuestions = Question::with(['users', 'answers'])->get();
        return view('question', compact('showQuestions'));
    }

    public function createQuestion(Request $request)
    {
        $question = new Question();
        $question->user_id = Auth::user()->id;
        $question->body = $request->input('body');
        $question->save();
        $user = Auth::user();
        Question::where('user_id', '=', $user->id)->get('body');
        return redirect()->back()->withSuccess('Suss');
    }

    public function createAnswer($showQuestion, Request $request)
    {
        $answer = new Answer();
        $answer->user_id = $request->user()->id;
        $answer->question_id = $showQuestion;
        $answer->body = $request->body;
        $answer->save();
        return back();
    }
}
