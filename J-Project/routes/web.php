<?php








<<<<<<< HEAD
Route::get('/', 'PagesController@home' );


=======
<<<<<<< HEAD

Route::get('/', 'PagesController@home' );



=======
Route::get('/', 'PagesController@home' );


>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e
Route::get('songs', 'SongsController@index' );

Route::get('songs/{song}', 'SongsController@show' );

<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e
Route::get('users', 'UsersController@index' );

Route::get('users/{user}', 'UsersController@show' );

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e
Route::get('/', 'PagesController@home' );


Route::get('songs', 'SongsController@index' );

Route::get('songs/{song}', 'SongsController@show' );

<<<<<<< HEAD
=======
>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e

Route::post('songs/{song}/notes', 'NotesController@store');

Route::get('/notes/{note}/edit', 'NotesController@edit');

Route::patch('notes/{note}', 'NotesController@update');

<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('songs', 'SongsController@index' );

Route::get('songs/{song}', 'SongsController@show' );

Route::get('song', 'PagesController@song' );

