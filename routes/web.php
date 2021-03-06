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
Route::get('php', function () {
    return 'php是世界上最好的语言';
});
Route::get('/user/{id}', 'UserController@user');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
