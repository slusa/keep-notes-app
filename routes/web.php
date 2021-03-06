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

Route::get('notes/changePriority/{id}','NotesController@changePriority');

Route::post('notes/changeColor/{id}','NotesController@changeColor');

Route::get('notes/filterColor/{color}','NotesController@filterColor');

Route::get('/', 'NotesController@index');

Route::resource('notes', 'NotesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

