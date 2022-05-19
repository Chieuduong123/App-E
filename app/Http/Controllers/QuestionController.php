<?php

namespace App\Http\Controllers;

use App\Models\Question;
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

    public function update(Request $request, $id)
    {
        $question = Question::find($id);
        $question->user_id = Auth::user()->id;
        $question->body = $request->input('body');
        $result = $question->save();
        $list_question = Question::with('answers')->get();
        if ($result) {
            return response()->json(['Update Successful' => $list_question]);
        } else {
            return ["Update Failed"];
        }
    }

    public function delete($id)
    {
        $question = Question::find($id);
        $result = $question->delete();
        if ($result) {
            return ["Delete Successfull"];
        } else {
            return ["Delete Failed"];
        }
    }

    public function store()
    {
        $list_question = Question::with('answers')->get();
        return response()->json([$list_question], 200);
    }
}
