<?php

use Illuminate\Support\Facades\Route;

//no auth need
Route::group(['middleware' => 'guest'], function() {
    Route::get('/login', 'LoginController@showLoginForm')->name('login.showLoginForm');
    Route::post('/login','LoginController@adminLogin')->name('login.adminLogin');
});

//Must be Admin
Route::group(['middleware' => 'admin'], function () {
    //admin panel index page
    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    //admin logout
    Route::get('/logout', 'LoginController@adminLogout')->name('login.adminLogout');

    //suggestion CRUD
    Route::resource('suggestion', 'SuggestionController');

    //comment CRUD
    Route::resource('comment', 'CommentController');

    //un-confirmed comments
    //un-confirmed comments list
    Route::get('/comment/un-confirmed/list', 'CommentController@unConfirmedComments')->name('comment.un-confirmedComments');
    //confirm comment
    Route::PATCH('/comment/un-confirmed/{id}/confirm', 'CommentController@confirmComment')->name('comment.confirmComment');
});

