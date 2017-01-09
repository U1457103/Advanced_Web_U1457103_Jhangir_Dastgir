<?php



Route::get('/', 'PagesController@home' );

Route::get('songs', 'SongsController@index' );

Route::get('songs/{song}', 'SongsController@show' );
