<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use App\User;
use Illuminate\Http\Request;
use Auth;

class UserNotesController extends Controller
{
   	public function store(Request $request, User $user)
   	{
         $this->validate($request, [
               'body' => 'required|min:4|max:140',
         ]);

         $note = new Note($request->all());
         $note->user_id = $request->user()->id;
         $user->notes()->save($note);

   		// $card->notes()->create( ['body' => $request->body, 'user_id' => $request->user()->id] );
         session()->flash('flash_message', 'Note Added');
   		return back();
   	}
}
