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
});

