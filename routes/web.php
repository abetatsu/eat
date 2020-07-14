<?php

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

Route::get('/beef', 'BeefController@index');
Route::get('/beef/{beef}', 'BeefController@show');

Route::get('/curry', 'CurryController@index');
Route::get('/curry/{curry}', 'CurryController@show');

Route::post('/user', 'UserController@update');
Route::get('/user/{user}', 'UserController@show');


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
