<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('auth/login');
// });

//Register --/  Login --/
//Route::get('/login', 'App\Http\Controllers\Admin\LoginController@getLogin')->name('login');
// Route::get('/login', ['as' => 'login', 'uses' => 'App\Http\Controllers\Admin\LoginController@getLogin'])->name('login');
// Route::post('/login', ['as' => 'login', 'uses' => 'App\Http\Controllers\Admin\LoginController@postLogin'])->name('login');
// Route::get('/logout', ['as' => 'getLogout', 'uses' => 'App\Http\Controllers\Admin\LoginController@getLogout']);



// Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
//     Route::resource('products', ProductController::class);
//     Route::get('users', 'App\Http\Controllers\Admin\UserController@listUsers')->name('users');
//     Route::get('orders', 'App\Http\Controllers\Admin\OrderController@listOrders')->name('orders');
//     Route::get('conts', 'App\Http\Controllers\Admin\MessageController@listConts')->name('conts');
//     Route::get('/', 'App\Http\Controllers\Admin\ProductController@admin')->name('/');
//     // Route::get('/', function () {
//     //     return view('admin.index');
// });
