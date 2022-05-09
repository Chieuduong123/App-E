<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

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
        $question = Question::with('answers')->where('id', '=', $id)->get();
        return response()->json([$question], 200);
    }

    public function showPost($id)
    {
        $postFind = Question::find($id);
        if (is_null($postFind)) {
            return response()->json('not found', 404);
        }
        $post = Question::with('answers')->where('id', '=', $id)->get();
        return response()->json([$post], 200);
    }
}
