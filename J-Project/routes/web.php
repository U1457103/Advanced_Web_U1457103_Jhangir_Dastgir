<?php


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/', 'HomeController@index' );

Route::get('songs', 'SongsController@index' );

Route::get('songs/{song}', 'SongsController@show' );

Route::get('users', 'UsersController@index' );

Route::get('users/{user}', 'UsersController@show' );

Route::post('songs/{song}/details', 'DetailsController@store');

Route::get('/details/{detail}/edit', 'DetailsController@edit');

Route::get('/details/{detail}/delete', 'DetailsController@delete');

Route::patch('details/{detail}', 'DetailsController@update');
