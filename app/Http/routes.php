<?php

// Cards and Notes only for Authenticated Users.
Route::group(['middleware' => ['web','auth']], function() {
	Route::get('cards', 'CardsController@index');
	Route::get('cards/{card}', 'CardsController@show');

	Route::post('cards/{card}/notes', 'NotesController@store');

	Route::get('notes/{note}/edit', 'NotesController@edit');
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

