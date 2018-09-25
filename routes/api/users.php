<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:api'], function() {
    Route::match(['put', 'patch'], '/{id}', 'UserController@update')->name('users.update');
});

Route::group(['middleware' => 'auth.admin'], function() {
    Route::match(['get', 'post'],  '/create','UserController@create')->name('users.create');
});