<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::post('/users/signin', 'App\Http\Controllers\SigninController@signin')->name('kirish');

Route::post('/users/signup', 'App\Http\Controllers\SignupController@signup')->name('Ak-ochish');