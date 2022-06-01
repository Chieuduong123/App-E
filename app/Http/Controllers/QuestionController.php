<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function create(Request $request)
    {
        $question = new Question();
        $question->user_id = Auth::user()->id;
        $question->body = $request->input('body');
        $question->save();
        $user = Auth::user();
        Question::where('user_id', '=', $user->id)->get('body');
        // $list_question = User::join('questions', 'users.id', '=', 'questions.user_id')
        //     ->select('name', 'questions.body')->get();
        $list_question = Question::with('answers')->get();
        return response()->json([$list_question]);
    }

    public function update(Request $request, Question $question)
    {
        // $question = Question::find($request->$id);
        $question->user_id = Auth::user()->id;
        $newQuestion = $request->body;
        $question->body = $newQuestion;
        $result = $question->save();
        $list_question = Question::with('answers')->get();
        if ($result) {
            return response()->json(['Update Successful' => $list_question]);
        } else {
            return ["Update Failed"];
        }
    }

    public function delete(Question $question)
    {
        $result = $question->delete();
        $list_question = Question::with('answers')->get();
        if ($result) {
            return response()->json(['Delete Successful' => $list_question]);
        } else {
            return ["Delete Failed"];
        }
    }

    public function store()
    {
        //$list_question = Question::with('answers')->get();
        $list_question = User::join('questions', 'users.id', '=', 'questions.user_id')
            ->select('name', 'questions.body')->get();
        return response()->json($list_question, 200);
    }

    public function showQuestion($question)
    {
        $showQuestion = Question::find($question);
        if (is_null($showQuestion)) {
            return response()->json('not found', 404);
        }
        $question = Question::with('answers')->where('id', '=', $question)->get();
        return response()->json([$question], 200);
    }
}
