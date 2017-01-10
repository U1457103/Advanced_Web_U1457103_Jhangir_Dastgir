<?php







Route::get('/', 'PagesController@home' );

Route::get('songs', 'SongsController@index' );

Route::get('songs/{song}', 'SongsController@show' );

Route::get('users', 'UsersController@index' );

Route::get('users/{user}', 'UsersController@show' );

Route::post('songs/{song}/notes', 'NotesController@store');

Route::get('/notes/{note}/edit', 'NotesController@edit')->middleware(['auth']);

Route::patch('notes/{note}', 'NotesController@update');



Route::auth();

Route::get('/home', 'HomeController@index');
