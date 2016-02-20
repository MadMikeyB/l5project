<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
   	public function store(Request $request, Card $card)
   	{
   		$card->notes()->create( ['body' => $request->body] );
   		return back();
   	}
}
