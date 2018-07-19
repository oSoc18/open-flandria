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
Route::get('/project/{project}', 'ProjectController@show');
Route::put('/project/edit/{project}', 'ProjectController@edit');
Route::get('/project/update/{id}', 'ProjectController@update');
Route::delete('project/remove/{id}', 'ProjectController@destroy');

Route::get('/gallery', 'GalleryController@index')->middleware('auth');
Route::get('/gallery/{id}', 'GalleryController@show')->middleware('auth');
Route::delete('gallery/remove/{id}', 'GalleryController@destroy')->middleware('auth');

Route::get('galleries/create', 'GalleryController@create')->middleware('auth');
Route::put('galleries/add', 'GalleryController@store')->middleware('auth');
Route::put('/gallery/update/{gallery}', 'GalleryController@edit')->middleware('auth');
Route::get('/galleries/manage' , 'GalleryController@manageAllGalleries')->middleware('auth');

Route::put('/galleries/addproject/{id}' , 'GalleryController@addProjectToGallery')->middleware('auth');


Route::get('/upload', 'ProjectController@create')->middleware('auth');
Route::post('/upload', 'ProjectController@store')->middleware('auth');

Route::get('/settings', ['as' => 'users.settings', 'uses' => 'UserController@index'])->middleware('auth');
Route::put('/settings/edit', 'UserController@edit')->middleware('auth');
Route::delete('/settings/remove', 'UserController@destroy')->middleware('auth');

Auth::routes();

