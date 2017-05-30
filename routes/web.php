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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/about', function() {
//    return view('about');
//});

Route::get('/', 'PagesController@home'); // home is the method to call in the Pages Controller

Route::get('about', 'PagesController@about');

Route::get('cards', 'CardsController@index'); // index, create, store, show, edit, update, destroy
Route::get('cards/{card}', 'CardsController@show');

Route::get('cards/create', 'CardsController@create');
Route::post('cards', 'CardsController@store');

Route::get('cards/{card}/edit', 'CardsController@edit');
Route::put('cards/{card}', 'CardsController@update');

Route::get('cards/{card}/delete', 'CardsController@delete');
Route::delete('cards/{card}', 'CardsController@destroy');

Route::post('cards/{card}/notes', 'NotesController@store');
