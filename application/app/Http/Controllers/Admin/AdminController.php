<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Video;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('is_admin', '=', false)->orderByDesc('id')->paginate(5);
        return view('admin/admin', compact('users'));
    }

    public function showVideo()
    {
        $videos = Video::orderByDesc('id')->paginate(5);
        return view('admin/video', compact('videos'));
    }

    public function createVideo()
    {
        $videos = Video::orderByDesc('id')->paginate(5);
        return view('admin/create', compact('videos'));
    }

    public function storeVideo(Request $request)
    {
        $request->validate([
            'links' => 'required',
            'title' => 'required',
        ]);
        $video = new Video();
        $video->links = $request->links;
        $video->title = $request->title;
        $video->save();
        return redirect()->route('showVideo');
    }

    public function destroyVideo($id)
    {
        $videos = Video::find($id);
        $videos->delete();
        return redirect()->back()->with('success', 'Video removed successfully!');
    }

    public function showQuestion()
    {
        $questions = User::join('questions', 'users.id', '=', 'questions.user_id')
            ->select('questions.id', 'name', 'questions.body')->orderByDesc('id')->paginate(5);
        return view('admin/question', compact('questions'));
    }

    public function destroyQuestion($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();
        return redirect()->back()->with('success', 'Question removed successfully!');
    }

    public function showAnswer($id)
    {
        $answers = Question::join('answers', 'questions.id', '=', 'answers.question_id')
            ->where('questions.id', '=', $id)
            ->paginate(5);
        return view('admin/answer', compact('answers'));
    }

    public function destroyAnswer($id)
    {
        $answer = Answer::findOrFail($id);
        $answer->delete();
        return redirect()->back()->with('success', 'Answer removed successfully!');
    }
}
