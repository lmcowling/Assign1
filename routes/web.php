<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('films', 'FilmsController@filmIndex');
Route::get('films/{film_id}', 'FilmsController@filmDetail');

Route::post('films/search', 'FilmsController@filmSearch');

Route::post('films/{film}/reviews', 'ReviewsController@add');

Route::post('films/{film}/filmsEdit', 'FilmsController@films');
Route::patch('films/{film}/edit', 'FilmsController@filmEdit');

Route::get('reviews/{review_id}', 'ReviewsController@reviewDetail');
Route::post('reviews/{review}/delete', 'ReviewsController@reviewDelete');

Auth::routes();
