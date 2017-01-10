<?php



<<<<<<< HEAD




Route::get('/', 'PagesController@home' );

=======
Route::get('/', 'PagesController@home' );


>>>>>>> 1931d75cac7afb892750bb2c97393a6ae87a7ffa
Route::get('songs', 'SongsController@index' );

Route::get('songs/{song}', 'SongsController@show' );

Route::post('songs/{song}/notes', 'NotesController@store');

Route::get('/notes/{note}/edit', 'NotesController@edit');

Route::patch('notes/{note}', 'NotesController@update');

<<<<<<< HEAD


Route::auth();

Route::get('/home', 'HomeController@index');
=======
Route::get('songs', 'SongsController@index' );

Route::get('songs/{song}', 'SongsController@show' );

Route::get('song', 'PagesController@song' );
>>>>>>> 1931d75cac7afb892750bb2c97393a6ae87a7ffa
