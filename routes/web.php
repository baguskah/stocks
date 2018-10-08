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

Route::get('/emitens', 'emitenController@index')->name('emiten.index');
Route::post('/emitens/save', 'emitenController@create')->name('emiten.create');

Route::get('/history', 'historyController@index')->name('history.index');
Route::post('/history/add', 'historyController@create')->name('history.add');
