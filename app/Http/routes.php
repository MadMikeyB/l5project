<?php

// Cards and Notes only for Authenticated Users.
Route::group(['middleware' => ['web','auth']], function() {
	// All Cards
	Route::get('cards', 'CardsController@index');
	// Show Card
	Route::get('cards/{card}', 'CardsController@show');
	// Create Card
	Route::get('cards/create', 'CardsController@create');
	// Update Card
	Route::patch('cards/{card}', 'CardsController@update');
	// Store Card
	Route::post('cards', 'CardsController@store');
	// Edit Note
	Route::get('notes/{note}/edit', 'NotesController@edit');
	// Store Note
	Route::post('cards/{card}/notes', 'NotesController@store');
	// Update Note
	Route::patch('notes/{note}', 'NotesController@update');
});

// Social Auth
Route::group(['middleware' => 'web'], function() {


	Route::get('/', 'PagesController@home');
	Route::get('about', 'PagesController@about');
	
	Route::auth();

	Route::get('social/{provider?}', 'Auth\AuthController@redirectToProvider');
	Route::get('social/{provider?}/callback', 'Auth\AuthController@handleProviderCallback');
});

