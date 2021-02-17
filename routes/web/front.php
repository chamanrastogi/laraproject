<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@index')->name('logout');
Route::get('/post/{post}', 'PostController@view')->name('post');