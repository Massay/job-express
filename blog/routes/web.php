<?php



Route::get('/', 'HomeController@welcome');

Auth::routes();
Route::get('/post/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/post/create','PostsController@store');
Route::get('/home', 'PostsController@index')->name('home');
