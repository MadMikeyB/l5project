<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
        // return view('pages.welcome');
        return redirect('/cards');
    }

    public function about()
    {
        return view('pages.about');
    }
}
