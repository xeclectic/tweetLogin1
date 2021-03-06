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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'loginController@show');
Route::get('/', 'tweetController@show');
Route::post('/create', 'tweetController@createTweet');
Route::post('/edit', 'editTweetController@editTweet');
Route::get('/delete/{id}', 'deleteTweetController@deleteTweet');
