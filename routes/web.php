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
Route::get('notes', 'NotesController@index');
Route::get('notes/{note}', 'NotesController@show');

// New Website Pages
Route::get('/', 'NewPagesController@index');
Route::get('resume', 'NewPagesController@resume');
Route::get('projects', 'NewPagesController@projects');
Route::get('contact', 'NewPagesController@contact');
Route::post('sendEmail', 'NewPagesController@sendEmail');

// Old Website Pages
Route::get('oldsite', 'PagesController@index');
Route::get('oldsite/projects', 'PagesController@projects');
Route::get('oldsite/resume', 'PagesController@resume');
Route::get('oldsite/tictactoe', 'PagesController@tictactoe');
Route::get('oldsite/contact', 'PagesController@contact');
Route::get('oldsite/{param}', 'PagesController@error');
Route::post('oldsite/email', 'PagesController@email');
