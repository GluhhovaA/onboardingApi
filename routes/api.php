<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/signin', 'Api\SigninController@signin');

Route::get('/profile/user', 'Api\ProfileController@index');
Route::put('/profile/user/update', 'Api\ProfileController@update')->name('upload');

Route::get('/tasks', 'Api\TasksController@index');
Route::get('/interests', 'Api\InterestsController@index');
Route::get('/users', 'Api\UserController@index');

