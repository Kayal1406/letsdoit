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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add-topic', 'DiscussionTopicController@add')->name('add-topic');
Route::post('/add-topic', 'DiscussionTopicController@store');
Route::get('/discussion-detail/{id}', 'DiscussionTopicController@show')->name('discussion-detail');
Route::get('/get-related-topics', 'HomeController@getRelatedTopics');
