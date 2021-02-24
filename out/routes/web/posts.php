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
use App\User;




Route::group(['middleware' => ['auth']], function () {
Route::get('/admin', 'AdminController@index')->name('admin.index');   
Route::resource('/admin/post', 'PostController'); 
Route::get('/admin/users/create', 'UserController@create')->name('user.profile.create');
Route::put('/admin/users/{user}/update', 'UserController@update')->name('user.profile.update');
Route::delete('/admin/users/{user}/destory', 'UserController@destory')->name('user.destory');
});



