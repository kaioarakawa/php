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

Route::resource('state', 'StateController');
Route::get('/state/{id}/delete', 'StateController@delete');

Route::resource('city', 'CityController');
Route::get('/city/{id}/delete', 'CityController@delete');
