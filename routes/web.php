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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/posts/create', 'PostController@create')->name('post.create');
    Route::get('/posts/{post}', 'PostController@show')->name('post.show');
    Route::get('/posts/like/{post}', 'PostController@like')->name('post.like');
    Route::post('/posts', 'PostController@store')->name('post.store');
    Route::get('/posts/edit/{post}', 'PostController@edit')->name('post.edit');
    Route::put('/posts/{post}', 'PostController@update')->name('post.update');
});
