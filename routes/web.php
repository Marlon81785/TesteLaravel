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
Route::get('/create', 'HomeController@create')->name('create');
Route::get('/listFaixa', 'HomeController@listFaixa')->name('listFaixa');
Route::get('/listAlbum', 'HomeController@listAlbum')->name('listAlbum');
Route::get('/createAlbum', 'HomeController@createAlbum')->name('createAlbum');

