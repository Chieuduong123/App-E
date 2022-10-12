<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function createAnswer($question, Request $request)
    {
        $request->validate([
            'body' => 'required'
        ]);
        $answer = new Answer();
        $answer->user_id = $request->user()->id;
        $answer->question_id = $question;
        $answer->body = $request->body;
        $answer->save();
        $question = Question::with('answers')->where('id', '=', $question)->get();
        return response()->json([$question], 200);
    }

    // public function showPost($id)
    // {
    //     $postFind = Question::find($id);
    //     if (is_null($postFind)) {
    //         return response()->json('not found', 404);
    //     }
    //     // $post = Question::with('answers')->where('id', '=', $id)->get();
    //     $post = Question::join('answers', 'questions.id', '=', 'answers.question_id')->get();
    //     return response()->json([$post], 200);
    // }
}
