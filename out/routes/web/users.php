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


Route::group(['middleware' => ['role:Admin','auth']], function () {
    Route::get('/admin/users', 'UserController@index')->name('user.index');
    Route::get('/admin/users/{user}/profile', 'UserController@show')->name('user.profile.show'); 
});
Route::group(['middleware' => ['can:view,user']], function () {  
    
    Route::get('/admin/users/{user}/profile', 'UserController@show')->name('user.profile.show'); 
}); 


