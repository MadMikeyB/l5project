<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use App\User;
use Illuminate\Http\Request;
use Auth;

class NotesController extends Controller
{
   	public function store(Request $request, Card $card)
   	{
         $this->validate($request, [
               'body' => 'required|min:4|max:140',
         ]);

   		$card->notes()->create( ['body' => $request->body, 'user_id' => $request->user()->id] );
         session()->flash('flash_message', 'Note Added');
   		return back();
   	}

   	public function edit(Note $note)
   	{
   		return view('notes.edit', compact('note') );
   	}

   	public function update(Request $request, Note $note)
   	{
         $this->validate($request, [
               'body' => 'required|min:4|max:140',
         ]);
         
   		$note->update( $request->all() );
   		session()->flash('flash_message', 'Note Updated');
   		return back();
   	}

      public function destroy(Note $note)
      {
         $note->delete();
         session()->flash('flash_message', 'Note Deleted');
         return back();
      }
}
