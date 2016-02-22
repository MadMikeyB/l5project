<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use DB;

class CardsController extends Controller
{
   	public function index()
   	{
   		$cards = Card::all();
   		return view('cards.index', compact('cards'));
   	}

   	public function show(Card $card)
   	{
         $card->load('notes.user');
         return view('cards.show', compact('card'));
   	}

      public function create()
      {
         return view('cards.create');
      }

   	public function store(Request $request)
   	{
         $this->validate($request, [
               'title' => 'required|min:4|max:140',
         ]);

         Card::create(['title' => $request->title, 'user_id' => $request->user()->id]);
         session()->flash('flash_message', 'Card Created! Great job.');
         return redirect('/cards');
   	}

      public function destroy(Card $card)
      {
         $card->delete();
         session()->flash('flash_message', 'Card Archived!');
         return redirect('/cards');
      }

}
