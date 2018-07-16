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

Route::get('/settings', ['as' => 'users.settings', 'uses' => 'UserController@index'])->middleware('auth');
Route::put('/settings/edit', 'UserController@edit')->middleware('auth');
Route::delete('/settings/remove', 'UserController@destroy')->middleware('auth');

Auth::routes();

Route::get('login', 'Auth\LoginController@showLoginForm')->middleware('guest');
Route::post('login', 'Auth\LoginController@login')->middleware('guest');
Route::get('logout', 'Auth\LoginController@logout')->middleware('auth');

Route::get('register', 'Auth\RegisterController@showRegistrationForm');
Route::post('register', 'Auth\RegisterController@register');

Route::get('password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/email', 'Auth\ResetPasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
