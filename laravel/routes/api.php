<?php

use Illuminate\Http\Request;

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

Route::get('/', 'BlogController@index');
Route::post('/', 'BlogController@store');
Route::get('/{blog}', 'BlogController@show');
Route::put('/{blog}', 'BlogController@update');
Route::delete('/{blog}', 'BlogController@destroy');
