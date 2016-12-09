<?php

namespace App\Http\Controllers;

use DB;
use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index()
    {
//         $cards = DB::table('cards')->get();
      
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }
    
    // Pass in the Note's id to get the Note object.
    public function show(Note $note)
    {
        return view('notes.show', compact('note'));
    }
  
    public function postNote(Request $request)
    {
      if ($request->isMethod('post'))
      {
        $note = new Note;
        $note->name = $request->input('name', 'Anonymous');
        $note->content = $request->input('content', 'Left no note... :|');
        if ($note->save())
        {
          return back();
        }
      }
    }
}
