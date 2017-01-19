<?php


Route::auth();

Route::get('/home', 'HomeController@index');

// The Homepage

Route::get('/', 'HomeController@index' );

// The Dashboard

Route::get('songs', 'SongsController@index' );

// All Singers

Route::get('songs/{song}', 'SongsController@show' );

// Displays all singers

Route::get('users', 'UsersController@index' );

// All Users

Route::get('users/{user}', 'UsersController@show' );

// Displays all the users on the website

Route::post('songs/{song}/details', 'DetailsController@store');

// Add your details about your own singer

Route::get('/details/{detail}/edit', 'DetailsController@edit');

// User can edit the cdetails of the singer

Route::get('/details/{detail}/delete', 'DetailsController@delete');

// Users can delete the details of the singer

Route::patch('details/{detail}', 'DetailsController@update');

// Users can update the details of the singer.

Route::post('users/{user}/userprofiles', 'UserprofilesController@store');

// Users can add to their profile

Route::get('/users/{userprofile}/edit', 'UserprofilesController@edit');

// Users can edit the profile

Route::patch('users/{userprofile}', 'UserprofilesController@update');

// Users can update their profile

Route::get('/users/{userprofile}/delete', 'UserprofilesController@delete');

// Only the ADMIN can delete the user profiles!
