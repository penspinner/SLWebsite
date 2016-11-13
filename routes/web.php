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

Route::get('/', function () 
{
    return view('index', [
        'name' => 'OP',
        'active_page' => 'Home',
        'stylesheets' => array("/css/MainStyle.css", "/css/HomePage.css")
    ]);
});

Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');

Route::get('/projects', function()
{
    
});

Route::get('/resume', function()
{
       
});

Route::get('/tictactoe', function()
{
    
});

Route::get('/contact', function()
{
    
});

Route::get('/{param}', function($param)
{
    return view('errors/404', ['param' => $param]);
});