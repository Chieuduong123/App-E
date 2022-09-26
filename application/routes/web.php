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
Route::group(['middleware' => ['web','auth']], function () {
    Route::get('/admin', 'Admin\AdminController@index')->name('admin');
    Route::get('/question', 'Admin\AdminController@showQuestion')->name('showQuestion');
    Route::get('question/{id}', 'Admin\AdminController@destroyQuestion')->name('questions.destroy');
    Route::get('/answer/{id}', 'Admin\AdminController@showAnswer')->name('showAnswer');
    Route::get('answers/{id}', 'Admin\AdminController@destroyAnswer')->name('answers.destroy');
    Route::get('/showVideo', 'Admin\AdminController@showVideo')->name('showVideo');
    Route::get('/createVideo', 'Admin\AdminController@createVideo')->name('video.create');
    Route::post('/storeVideo', 'Admin\AdminController@storeVideo')->name('video.store');
    Route::get('video/{id}', 'Admin\AdminController@destroyVideo')->name('videos.destroy');
});

Route::get('/home', 'Admin\HomeController@index')->name('/home');
Route::get('/video', 'Admin\HomeController@showVideo')->name('/video');

Route::get('/level', 'Admin\HomeController@showLevel')->name('/level');
Route::get('/level/{level}', 'Admin\HomeController@showKind')->name('/levels');
Route::get('/kind/{id}', 'Admin\HomeController@showVocabulary')->name('/kind-detail');



