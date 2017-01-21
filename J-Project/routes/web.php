<?php


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/', 'HomeController@index' );

// Shows the Dashboard and Homepage

Route::get('songs', 'SongsController@index');

Route::get('admin', 'SongsController@admin');

Route::post('songs', 'SongsController@search' );

Route::get('songs/{song}', 'SongsController@show' );

// Shows all the Singers In the SongsController

Route::get('users', 'UsersController@index' );

Route::get('users/{user}', 'UsersController@show' );

// Shows all of the users that are registered on the website

Route::post('songs/{song}/details', 'DetailsController@store');

Route::get('/details/{detail}/edit', 'DetailsController@edit');

Route::get('/details/{detail}/delete', 'DetailsController@delete');

Route::patch('details/{detail}', 'DetailsController@update');

// Users can edit/delete and add a detail about the singers. Admin can also do this


Route::post('users/{user}/userprofiles', 'UserprofilesController@store');

Route::get('/users/{userprofile}/edit', 'UserprofilesController@edit');

Route::patch('users/{userprofile}', 'UserprofilesController@update');

Route::get('/users/{userprofile}/delete', 'UserprofilesController@delete');

// Users can edit/delete and add their to their profile. Admin can also do this
