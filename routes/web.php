<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('films');
});

Route::get('films/create', function () {
    return view('movie_create');
});

Route::get('films', 'FilmsController@show');

Route::get('films/{slug}', 'FilmsController@one');

Route::post('films/create', 'FilmsController@create');

Route::post('comment/create', 'CommentsController@create')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
