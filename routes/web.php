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
use Illuminate\Support\Facades\App;

Route::get('/', 'HomeController@index')->name('index');

Route::get('images/{image}/download', 'ImageController@download');

Route::get('projects', 'ProjectController@index');
Route::get('projects/{project}', 'ProjectController@show');
Route::get('projects/edit/{project}', 'ProjectController@edit')->middleware('admin');
Route::put('projects/update/{project}', 'ProjectController@update')->middleware('admin');
Route::delete('projects/remove/{project}', 'ProjectController@destroy')->middleware('admin');
Route::post('projects/like/{project}', 'ProjectController@like')->middleware('auth');

Route::get('upload', 'ProjectController@create')->middleware('auth');
Route::post('upload', 'ProjectController@store')->middleware('auth');

Route::get('contact', 'ContactController@index');
Route::post('contact', 'ContactController@store')->name('contact');

Route::get('galleries', 'GalleryController@index')->middleware('auth');
Route::get('galleries/{gallery}', 'GalleryController@show')->middleware('auth');
Route::put('galleries/{gallery}/{project}' , 'GalleryController@update')->middleware('auth');
Route::post('galleries', 'GalleryController@store')->middleware('auth');
Route::delete('gallries/{gallery}', 'GalleryController@destroy')->middleware('auth');
Route::get('galleries/add', 'GalleryController@create')->middleware('auth');
Route::put('galleries/{gallery}', 'GalleryController@edit')->middleware('auth');
//Route::get('/galleries/manage' , 'GalleryController@manageAllGalleries')->middleware('auth');


Route::get('search', 'SearchController@index')->name('search');

Route::get('user/settings', 'SettingsController@index')->middleware('auth')->name('users.settings');
Route::put('user/settings/update', 'SettingsController@update')->middleware('auth');
Route::delete('user/settings/remove', 'SettingsController@destroy')->middleware('auth');
Route::get('user/verify/{token}', 'Auth\RegisterController@verify')->middleware('guest');

Route::get('upload', 'ProjectController@create')->middleware('auth')->name('upload')->middleware('contrib');
Route::post('upload', 'ProjectController@store')->middleware('auth')->middleware('contrib');

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

Route::get('locale/en', function() {
    App::setLocale('en');
    return redirect()->back()->withCookie('lang', 'en');
});

Route::get('locale/nl', function() {
    App::setLocale('nl');
    return redirect()->back()->withCookie('lang', 'nl');
});

Route::get('about', function() {
    return view('about');
});

Route::get('gallery', function() {
    return view('gallery');
});

Route::get('sign', function() {
    return view('sign');
});

Route::get('signin', function() {
    return view('signin');
});

Route::get('signup', function() {
    return view('signup');
});

Route::get('up', function() {
    return view('up');
});

//Route::get('contact', function() {
//    return view('contact');
//});

Route::get('submited', function() {
    return view('submited');
});

Route::get('thanks', function() {
    return view('thanks');
});
