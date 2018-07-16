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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/project', 'ProjectController@index');
Route::get('/project/{id}', 'ProjectController@show');
Route::put('/project/edit/{id}', 'ProjectController@edit');
Route::get('/project/update/{id}', 'ProjectController@update');
Route::delete('project/remove/{id}', 'ProjectController@destroy');

Route::get('/upload', 'ProjectController@create')->middleware('auth');
Route::post('/upload', 'ProjectController@store')->middleware('auth');

Route::get('/settings', ['as' => 'users.settings', 'uses' => 'UserController@index'])->middleware('auth');
Route::put('/settings/edit', 'UserController@edit')->middleware('auth');
Route::delete('/settings/remove', 'UserController@destroy')->middleware('auth');

Auth::routes();
