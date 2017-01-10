<?php



Route::get('/', 'PagesController@home' );

<<<<<<< HEAD
Route::get('songs', 'SongsController@index' );

Route::get('songs/{song}', 'SongsController@show' );

Route::post('songs/{song}/notes', 'NotesController@store');

Route::get('/notes/{note}/edit', 'NotesController@edit');

Route::patch('notes/{note}', 'NotesController@update');
=======
<<<<<<< HEAD
Route::get('songs', 'SongsController@index' );

Route::get('songs/{song}', 'SongsController@show' );
=======
Route::get('song', 'PagesController@song' );
>>>>>>> 2d2c0e40042e81c4531759c8518845141191ef55
>>>>>>> 925cbf206bd770de54b474b29415fe60e128064f
