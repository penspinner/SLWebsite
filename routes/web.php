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

// New Website Pages
Route::get('/', 'NewPagesController@index');
Route::get('projects', 'NewPagesController@projects');
Route::get('contact', 'NewPagesController@contact');
Route::post('sendEmail', 'NewPagesController@sendEmail');

// Old Website Pages
Route::get('old/', 'PagesController@index');
Route::get('old/projects', 'PagesController@projects');
Route::get('old/resume', 'PagesController@resume');
Route::get('old/tictactoe', 'PagesController@tictactoe');
Route::get('old/contact', 'PagesController@contact');
Route::get('old/{param}', 'PagesController@error');
Route::post('old/email', 'PagesController@email');