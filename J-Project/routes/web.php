<?php







Route::get('/', 'PagesController@home' );

Route::get('songs', 'SongsController@index' );

Route::get('songs/{song}', 'SongsController@show' );

Route::post('songs/{song}/notes', 'NotesController@store');

Route::get('/notes/{note}/edit', 'NotesController@edit');

Route::patch('notes/{note}', 'NotesController@update');



Route::auth();

Route::get('/home', 'HomeController@index');
