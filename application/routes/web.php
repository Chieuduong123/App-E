<?php

use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\BotManController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/bot', function () {
    return view('welcome');
});


Route::match(['get', 'post'], 'botman', [BotManController::class, 'handle']);

Route::get('login', [
    'as' => 'login',
    'uses' => 'Admin\LoginController@getLogin'
]);

Route::post('/login', [
    'uses' => 'Admin\LoginController@postLogin',
    'as' => 'login'
]);
Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/admin', 'Admin\AdminController@index')->name('admin');
    Route::get('/list-question', 'Admin\AdminController@showQuestion')->name('showAdminQuestion');
    Route::get('question/{id}', 'Admin\AdminController@destroyQuestion')->name('questions.destroy');
    Route::get('/answer/{id}', 'Admin\AdminController@showAnswer')->name('showAnswer');
    Route::get('answers/{id}', 'Admin\AdminController@destroyAnswer')->name('answers.destroy');
    Route::get('/showVideo', 'Admin\AdminController@showVideo')->name('showVideo');
    Route::get('/createVideo', 'Admin\AdminController@createVideo')->name('video.create');
    Route::post('/storeVideo', 'Admin\AdminController@storeVideo')->name('video.store');
    Route::get('video/{id}', 'Admin\AdminController@destroyVideo')->name('videos.destroy');

    Route::get('/add-quiz', 'Admin\QuizController@addQuiz')->name('add.quiz');
    Route::post('/store-quiz', 'Admin\QuizController@storeQuiz')->name('store.quiz');

    Route::get('/add-quiz-question/{id}', 'Admin\QuizzQuestionController@addQuizQuestion')->name('add.question');
    Route::post('/store-question', 'Admin\QuizzQuestionController@storeQuizQuestion')->name('store.question');




    Route::post('/createQuestion', 'Web\QuestionController@createQuestion')->name('question.create');
    Route::post('/createAnswer/{showQuestion}', 'Web\QuestionController@createAnswer')->name('answer.create');

    Route::get('/quiz-list', 'Admin\QuizController@index')->name('list.quiz');
    Route::get('/give-quiz/{id}', 'Admin\QuizController@joinQuiz')->name('join.quiz');
    Route::post('/store-answer', 'Web\QuizzAnswerController@store')->name('store.answer');
    Route::get('/results', 'Web\ResultController@index')->name('results');

    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/inbox', 'Web\InboxController@index')->name('inbox.index');
    Route::get('/inbox/{id}', 'Web\InboxController@show')->name('inbox.show');
});

Route::get('/', 'Web\HomeController@index')->name('/home');
Route::get('/video', 'Web\HomeController@showVideo')->name('/video');

Route::get('/level', 'Web\VocabularyController@showLevel')->name('/level');
Route::get('/level/{level}', 'Web\VocabularyController@showKind')->name('/levels');
Route::get('/kind/{id}', 'Web\VocabularyController@showVocabulary')->name('kind');
Route::get('/vocabulary/{id}', 'Web\VocabularyController@showDetailVocabulary')->name('vocabulary');

Route::get('/question', 'Web\QuestionController@showQuestion')->name('showQuestion');
