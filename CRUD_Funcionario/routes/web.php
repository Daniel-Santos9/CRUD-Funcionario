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
    return view('index');
});
// Route::resource('funcionario','FuncionarioController'); 
Route::get('/','FuncionarioController@index')->name('index');
Route::get('create','FuncionarioController@create')->name('create');
Route::get('edit/{id}','FuncionarioController@edit')->name('edit');
Route::post('store','FuncionarioController@store')->name('store');
Route::put('update/{id}','FuncionarioController@update')->name('update');
Route::get('destroy/{id}','FuncionarioController@destroy')->name('destroy');




