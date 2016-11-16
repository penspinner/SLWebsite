<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    protected $base = 'old.';
  
    public function index()
    {
        return view($this->base . 'index', 
        [
            'name' => 'OP',
            'active_page' => 'home',
            'stylesheets' => array("old/css/MainStyle.css", "old/css/HomePage.css")
        ]);
    }
    
    public function projects()
    {
        return view($this->base . 'projects', 
        [
            'name' => 'Steven Liao Projects',
            'active_page' => 'projects',
            'stylesheets' => array("old/css/MainStyle.css", "old/css/ProjectsStyle.css")
        ]);
    }
    
    public function resume()
    {
        return view($this->base . 'resume', 
        [
            'name' => 'Steven Liao Resume',
            'active_page' => 'resume',
            'stylesheets' => array("old/css/MainStyle.css", "old/css/ResumeStyle.css")
        ]);
    }
    
    public function tictactoe()
    {
        return view($this->base . 'tictactoe', 
        [
            'name' => 'OP tic tac toe',
            'active_page' => 'tictactoe',
            'stylesheets' => array("old/css/MainStyle.css", "old/css/TicTacToeStyle.css")
        ]);
    }
    
    public function contact()
    {
        return view($this->base . 'contact', 
        [
            'name' => 'Contact Me',
            'active_page' => 'contact',
            'stylesheets' => array("old/css/MainStyle.css", "old/css/ContactMeStyle.css")
        ]);
    }
  
    public function email()
    {
        return view($this->base . 'email');
    }
    
    public function error($param)
    {
        return view('errors/404', ['param' => $param]);
    }
}
