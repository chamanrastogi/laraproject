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


use App\Post;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::get('/post/{post}', 'PostController@view')->name('post');

Route::group(['middleware' => ['auth']], function () {
  
Route::get('/admin', 'AdminController@index')->name('admin.index');  
Route::resource('/admin/post', 'PostController'); 
});