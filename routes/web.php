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

Route::get('/', 'PagesControler@index')->name('home');
Route::get('/create', 'PagesControler@create')->name('create');
Route::post('/create', 'StudentControler@store')->name('store');
Route::get('/edit/{id}', 'PagesControler@edit')->name('edit');
Route::post('/update/{id}', 'StudentControler@update')->name('update');
Route::delete('/delete/{id}', 'StudentControler@delete')->name('delete');

