<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewPagesController extends Controller
{
  public function index()
  {
    return view('index',
    [
      'active_page' => 'home'
    ]);
  }
  
  public function projects()
  {
    return view('projects',
    [
      'active_page' => 'projects'
    ]);
  }
}
