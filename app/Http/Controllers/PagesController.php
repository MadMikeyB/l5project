<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

	public function home()
	{
		$people = ['Mikey', 'Sophie', 'Chris', 'Pav', 'Alex'];
    	return view('pages.welcome', compact('people'));
	}


	public function about()
	{
    	return view('pages.about');
	}
}
