<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuizzQuestion;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizzQuestionController extends Controller
{
    public function addQuizQuestion($id)
    {
        return view('admin.add-questions')->with('quiz_list', Quiz::where('id', $id)->first())
            ->with('quizz_questions', QuizzQuestion::where('quiz_id', $id)->get())
            ->with('quiz_id', $id);
    }

    public function storeQuizQuestion(Request $request)
    {
        if (QuizzQuestion::create([
            'quiz_id' => $request->quiz_id,
            'question' => $request->question,
            'option_a' => $request->option_a,
            'option_b' => $request->option_b,
            'option_c' => $request->option_c,
            'option_d' => $request->option_d,
            'correct_option' => $request->correct_option,
        ])) {
            return redirect()->back()->with('success', 'Question added successfully!');
        }
        return redirect()->back()->with('error', 'Something wrong!');
    }
}
