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

Route::get('/', 'HomeController@index')->name('index');

Route::get('projects', 'ProjectController@index');
Route::get('projects/{project}', 'ProjectController@show');
Route::get('projects/edit/{project}', 'ProjectController@edit')->middleware('admin');
Route::put('projects/update/{project}', 'ProjectController@update')->middleware('admin');
Route::delete('projects/remove/{project}', 'ProjectController@destroy')->middleware('admin');
Route::post('projects/like/{project}', 'ProjectController@like')->middleware('auth');

Route::get('search', 'SearchController@index')->name('search');

Route::get('user/gallery', 'UserController@index');

Route::get('user/settings', 'SettingsController@index')->middleware('auth')->name('users.settings');
Route::put('user/settings/update', 'SettingsController@update')->middleware('auth');
Route::delete('user/settings/remove', 'SettingsController@destroy')->middleware('auth');
Route::get('user/verify/{token}', 'Auth\RegisterController@verify')->middleware('guest');

Route::get('upload', 'ProjectController@create')->middleware('auth')->name('upload');
Route::post('upload', 'ProjectController@store')->middleware('auth');

Route::get('login', 'Auth\LoginController@showLoginForm')->middleware('guest');
Route::post('login', 'Auth\LoginController@login')->middleware('guest')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->middleware('auth')->name('logout');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->middleware('guest');
Route::post('register', 'Auth\RegisterController@register')->name('register');

Route::get('user/invite', 'InviteController@edit')->middleware('guest');
Route::put('user/invite', 'InviteController@update')->middleware('guest')->name('invite.update');
Route::post('user/invite/new', 'InviteController@store')->middleware('admin')->name('invite');
Route::get('user/invite/new', 'InviteController@create')->middleware('admin');
Route::get('user/invite/{user}', 'InviteController@show')->middleware('admin')->name('invite.show');

Route::get('password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm')->name('password.request');
Route::get('password/email', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.email');
Route::post('password/email', 'Auth\ResetPasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.reset');

Route::post('image/{$image}/download', 'ImageController@download')->name('download');

Route::get('about', function() {
    return view('about');
});

Route::get('gallery', function() {
    return view('gallery');
});

Route::get('sign', function() {
    return view('sign');
});
