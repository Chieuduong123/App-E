<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', 'Auth\UserController@register');
Route::post('/login', 'Auth\UserController@postLogin');
Route::group(['middleware' => ['auth:api']], function () {
    Route::post('/logout', 'Auth\UserController@logout');
    Route::post('/profile', 'Auth\UserController@details');
    Route::get('/question', 'QuestionController@store');
    Route::get('/question/{question}', 'QuestionController@showQuestion');
    Route::post('/question', 'QuestionController@create');
    Route::put('/question/{question}', 'QuestionController@update');
    Route::delete('/question/{question}', 'QuestionController@delete');
    Route::post('/answer/{question}', 'AnswerController@createAnswer');
});

Route::get('/level', 'KindController@level');
Route::get('/level/{level}', 'KindController@showLevel');
Route::get('/kind/{kind_id}', 'VocabularyController@showVocabulary');
Route::get('/kind/detail/{id}', 'VocabularyController@detailVocabulary');
Route::get('/search', 'VocabularyController@getSearchVocabulary');




// Route::get('/show/{id}', 'AnswerController@showPost');
// Route::get('/show', 'AnswerController@show');
