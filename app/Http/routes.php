<?php

// Whole Site for Authenticated Users.
Route::group(['middleware' => ['web','auth']], function() {
    /*
    |--------------------------
    | Static Pages
    |--------------------------
    */

	Route::get('/', 'PagesController@home');
	Route::get('about', 'PagesController@about');

	/*
    |--------------------------
    | Cards
    |--------------------------
    */

	// All Cards
	Route::get('cards', 'CardsController@index');
	// Create Card
	Route::get('cards/create', 'CardsController@create');
	// Update Card
	Route::patch('cards/{card}', 'CardsController@update');
	// Store Card
	Route::post('cards', 'CardsController@store');
	// Delete Card
	Route::delete('cards/{card}/delete', 'CardsController@destroy');
	// Show Card
	Route::get('cards/{card}', 'CardsController@show');
	
	/*
    |--------------------------
    | Card Notes
    |--------------------------
    */

	// Edit Note
	Route::get('notes/{note}/edit', 'NotesController@edit');
	// Store Note
	Route::post('cards/{card}/notes', 'NotesController@store');
	// Update Note
	Route::patch('notes/{note}', 'NotesController@update');
	// Delete Note
	Route::delete('notes/{note}/delete', 'NotesController@destroy');

    /*
    |--------------------------
    | Users
    |--------------------------
    */

    Route::get('users', 'UsersController@index');
    Route::get('profile/{user}', 'UsersController@show');
    
    /*
    |--------------------------
    | User Notes
    |--------------------------
    */

    Route::post('profile/{user}', 'UserNotesController@store');
});

// Auth
Route::group(['middleware' => 'web'], function() {
	// Auth
	Route::auth();
	// Social Auth
	Route::get('social/{provider?}', 'Auth\AuthController@redirectToProvider');
	Route::get('social/{provider?}/callback', 'Auth\AuthController@handleProviderCallback');
});

