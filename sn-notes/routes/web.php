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
    return redirect()->route('notes.index');
})->name('home');

//Registration routes
Route::get('/register', 'RegisterController@index')->name('register');
Route::post('/register', 'RegisterController@register');

//Login routes
Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

//Notes
Route::resource('notes', 'NotesController');

//Tags
Route::resource('tags', 'TagsController');