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
//    dd($id);
//    dd(bcrypt(Str::random(1)));
//    return view('user.cart.index',compact('prov'));
    return redirect()->route('home');

});

Route::get('book','BookController@show')->name('book.show');

Route::post('suggestion','SuggestionController@store')->name('suggestion.store')->middleware('throttle:50,600');

Route::post('comment','CommentController@store')->name('comment.store')->middleware('throttle:50,600');

Route::resource('order','OrderController');
Route::post('order/temp-store','OrderController@tempStore')->name('order.temp-store');
Route::get('get-cities/{province}'    , 'OrderController@getCities');


//Route::get('check','OrderController@index');  //test


//Route::get('get-provinces' , 'ProvinceCityController@getProvinces');
//Route::get('get-cities/{province}'    , 'ProvinceCityController@getCities');
