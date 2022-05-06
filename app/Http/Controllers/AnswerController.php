<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function answer($id, Request $request)
    {
        $request->validate([
            'body' => 'required'
        ]);
        $answer = new Answer();
        $answer->user_id = $request->user()->id;
        $answer->question_id = $id;
        $answer->body = $request->body;
        $answer->save();

        // $list_question = User::join('questions', 'users.id', '=', 'questions.user_id')
        // ->select('name',  'questions.body')->get();
        // $list_answer = User::join('answers', 'users.id', '=', 'answers.user_id')
        // ->select('name',  'answers.body')->get();
        // return response()->json(['question'=>$list_question , 'answer'=>$list_answer]);
    }

    // public function showPost($id)
    // {
    //     $postFind = Question::find($id);
    //     if (is_null($postFind)) {
    //         return response()->json('not found', 404);
    //     }
    //     $post = Question::with('answers')->where('id', '=', $id)->get();

    //     return response()->json([$post], 200);
    // }

    public function show()
    {
        $postFind = Question::select('body')->get();
        if (is_null($postFind)) {
            return response()->json('not found', 404);
        }
        $post = Question::with('answers')->get();
        return response()->json([$post], 200);
    }
    public function showPost($id)
    {
        $postFind = Question::find($id);
        if (is_null($postFind)) {
            return response()->json('not found', 404);
        }
        $post = Question::with('answers')->where('id', '=', $id)->select()->get();
        return response()->json([$post], 200);
    }
}
