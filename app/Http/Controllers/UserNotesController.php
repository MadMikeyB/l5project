<?php

namespace App\Http\Controllers;

use App\UserNote;
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

         $note = new UserNote;
         $note->author_id = $request->user()->id;
         $note->recipient_id = $user->id;
         $note->body = $request->body;
         $note->save();

         session()->flash('flash_message', 'Note Added');
   		return back();
   	}
}
