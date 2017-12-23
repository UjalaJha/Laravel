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

Route::get('/hello', function () {
    return 'hello';
});
Route::get('/page1', function () {
    return view('posts.page1');
});

Route::get('/new','PageController@index');
Route::get('/hi','PageController@hi');
Route::resource('ideas','IdeasController');