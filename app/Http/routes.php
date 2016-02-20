<?php

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');

Route::get('cards', 'CardsController@index');

