<?php

// Whole Site for Authenticated Users.
Route::group(['middleware' => ['web','auth']], function() {
	// Static Pages
	Route::get('/', 'PagesController@home');
	Route::get('about', 'PagesController@about');
	// All Cards
	Route::get('cards', 'CardsController@index');
	// Create Card
	Route::get('cards/create', 'CardsController@create');
	// Update Card
	Route::patch('cards/{card}', 'CardsController@update');
	// Store Card
	Route::post('cards', 'CardsController@store');
	// Show Card
	Route::get('cards/{card}', 'CardsController@show');
	// Edit Note
	Route::get('notes/{note}/edit', 'NotesController@edit');
	// Store Note
	Route::post('cards/{card}/notes', 'NotesController@store');
	// Update Note
	Route::patch('notes/{note}', 'NotesController@update');
});

// Auth
Route::group(['middleware' => 'web'], function() {
	// Auth
	Route::auth();
	// Social Auth
	Route::get('social/{provider?}', 'Auth\AuthController@redirectToProvider');
	Route::get('social/{provider?}/callback', 'Auth\AuthController@handleProviderCallback');
});

