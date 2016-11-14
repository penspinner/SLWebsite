<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Cards
Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');

// Pages
Route::get('/', 'PagesController@index');
Route::get('/projects', 'PagesController@projects');
Route::get('/resume', 'PagesController@resume');
Route::get('/tictactoe', 'PagesController@tictactoe');
Route::get('/contact', 'PagesController@contact');
Route::get('/{param}', 'PagesController@error');