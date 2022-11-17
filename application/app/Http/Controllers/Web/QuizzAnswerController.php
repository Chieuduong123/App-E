<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\QuizzQuestion;
use App\Models\Quiz;
use App\Models\Result;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuizzAnswerController extends Controller
{
    public function store(Request $request)
    {

        if (Carbon::now() > Carbon::parse($request->start_time)->addMinute(Quiz::where('id', $request->quiz_id)->value('duration'))) {
            return redirect()->back()->with('error', 'Time is Over');
        }
        $db_answers = QuizzQuestion::where('quiz_id', $request->quiz_id)->get();
        $correct = 0;
        $total = 0;
        foreach ($db_answers as $db_answer) {
            if ($db_answer->correct_option == $request->answer) {
                $correct++;
            } else {
            }
            $total++;
        }
        Result::create([
            'user_id' => auth()->user()->id,
            'quiz_id' => $request->quiz_id,
            'quiz_score' => $total,
            'achieved_score' => $correct
        ]);

        return redirect()->route('results')->with('success', 'Quiz done and result published');
    }
}
