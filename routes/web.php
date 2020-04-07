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


Route::get('/home','HomeController@home')->name('home');
//Route::get('/home','CommentController@store')->name('home');

Route::get('/', function () {
//    dd('dd');
//    dd(bcrypt(Str::random(1)));
//    return redirect('/home');
    return redirect()->route('home');
});

Route::get('book','BookController@show')->name('book.show');

Route::post('suggestion','SuggestionController@store')->name('suggestion.store')->middleware('throttle:50,600');

Route::post('comment','CommentController@store')->name('comment.store')->middleware('throttle:50,600');

Route::post('cart','CartController@tempStore')->name('cart.tempStore');
