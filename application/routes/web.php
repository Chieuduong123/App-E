<?php

use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    Route::get('/question', 'Admin\AdminController@showQuestion')->name('showQuestion');
    Route::get('question/{id}', 'Admin\AdminController@destroyQuestion')->name('questions.destroy');
    Route::get('/answer/{id}', 'Admin\AdminController@showAnswer')->name('showAnswer');
    Route::get('answers/{id}', 'Admin\AdminController@destroyAnswer')->name('answers.destroy');
    Route::get('/showVideo', 'Admin\AdminController@showVideo')->name('showVideo');
    Route::get('/createVideo', 'Admin\AdminController@createVideo')->name('video.create');
    Route::post('/storeVideo', 'Admin\AdminController@storeVideo')->name('video.store');
    Route::get('video/{id}', 'Admin\AdminController@destroyVideo')->name('videos.destroy');

    Route::post('/createQuestion', 'Web\QuestionController@createQuestion')->name('question.create');
});

Route::get('/', 'Web\HomeController@index')->name('/home');
Route::get('/video', 'Web\HomeController@showVideo')->name('/video');

Route::get('/level', 'Web\VocabularyController@showLevel')->name('/level');
Route::get('/level/{level}', 'Web\VocabularyController@showKind')->name('/levels');
Route::get('/kind/{id}', 'Web\VocabularyController@showVocabulary')->name('kind');
Route::get('/vocabulary/{id}', 'Web\VocabularyController@showDetailVocabulary')->name('vocabulary');

Route::get('/question', 'Web\QuestionController@showQuestion')->name('showQuestion');
