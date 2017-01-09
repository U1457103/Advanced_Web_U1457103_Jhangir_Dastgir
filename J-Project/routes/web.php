<?php



Route::get('/', 'PagesController@home' );

Route::get('song', 'PagesController@song' );

Route::get('users', 'UsersController@index' );

Route::get('users/{user}', 'UsersController@show' );
