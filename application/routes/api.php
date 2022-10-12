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
    Route::get('/question', 'Api\QuestionController@store');
    Route::get('/question/{question}', 'Api\QuestionController@showQuestion');
    Route::post('/question', 'Api\QuestionController@create');
    Route::put('/question/{question}', 'Api\QuestionController@update');
    Route::delete('/question/{question}', 'Api\QuestionController@delete');
    Route::post('/answer/{question}', 'Api\AnswerController@createAnswer');
});

Route::get('/level', 'Api\KindController@level');
Route::get('/level/{level}', 'Api\KindController@showLevel');
Route::get('/kind/{kind_id}', 'Api\VocabularyController@showVocabulary');
Route::get('/kind/detail/{id}', 'Api\VocabularyController@detailVocabulary');
Route::get('/search', 'Api\VocabularyController@getSearchVocabulary');




// Route::get('/show/{id}', 'AnswerController@showPost');
// Route::get('/show', 'AnswerController@show');
