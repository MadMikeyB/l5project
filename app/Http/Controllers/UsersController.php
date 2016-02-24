<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Note;

class UsersController extends Controller
{
	public function index()
	{
		$users = User::all();

		return view('users.index', compact('users'));
	}

	public function show(User $user)
	{
		return view('users.show', compact('user'));
	}
	
}
