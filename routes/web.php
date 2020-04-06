<?php

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


Route::get('/home','PageController@home')->name('home');
//Route::get('/home','CommentController@store')->name('home');

Route::get('/', function () {
//    dd('dd');
//    dd(bcrypt(Str::random(1)));
//    return redirect('/home');
    return redirect()->route('home');
});

Route::get('book','BookController@show');

Route::post('suggestion','SuggestionController@store')->middleware('throttle:5,600');

Route::post('comment','CommentController@store')->middleware('throttle:,600');

Route::post('cart','CartController@Tempstore');
