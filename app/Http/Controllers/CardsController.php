<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index()
    {
        $cards = DB::table('cards')->get();
        return view('cards.index', ['cards' => $cards]);
    }
    
    public function show($card)
    {
        
    }
}
