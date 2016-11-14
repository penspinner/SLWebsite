<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index', 
        [
            'name' => 'OP',
            'active_page' => 'Home',
            'stylesheets' => array("/css/MainStyle.css", "/css/HomePage.css")
        ]);
    }
    
    public function projects()
    {
        
    }
    
    public function resume()
    {
        
    }
    
    public function tictactoe()
    {
        
    }
    
    public function contact()
    {
        
    }
    
    public function error($param)
    {
        return view('errors/404', ['param' => $param]);
    }
}
