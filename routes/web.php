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

Route::get('/settings', 'UserController@index')->middleware('auth')->name('users.settings');
Route::put('/settings/edit', 'UserController@edit')->middleware('auth');
Route::delete('/settings/remove', 'UserController@destroy')->middleware('auth');

Route::get('/upload', 'ProjectController@create')->name('upload');
Route::post('/upload', 'ProjectController@store');

Route::get('login', 'Auth\LoginController@showLoginForm')->middleware('guest');
Route::post('login', 'Auth\LoginController@login')->middleware('guest')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->middleware('auth')->name('logout');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->middleware('guest');
Route::post('register', 'Auth\RegisterController@register')->name('register');

Route::get('invite', 'InviteController@edit')->middleware('guest');
Route::put('invite', 'InviteController@update')->middleware('guest')->name('invite.update');
Route::post('invite/new', 'InviteController@store')->middleware('admin')->name('invite');
Route::get('invite/new', 'InviteController@create')->middleware('admin');
Route::get('invite/{id}', 'InviteController@show')->middleware('admin')->name('invite.show');

Route::get('password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm')->name('password.request');
Route::get('password/email', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.email');
Route::post('password/email', 'Auth\ResetPasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.reset');
