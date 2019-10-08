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


Route::get('/todo','ToDoController@index')->name('todoIndex');
Route::get('/todo/show','ToDoController@show')->name('todoShow');
Route::get('/todo/new','ToDoController@new_form')->name('todoNewForm');
Route::post('/todo','ToDoController@save')->name('todoCreate');
Route::get('/todo/{id}','ToDoController@detail')->name('todoDetail');
Route::get('/todo/{id}/delete', 'ToDoController@delete')->name('todoDelete');
Route::get('/todo/edit/{id}','ToDoController@edit')->name('todoEditForm');
Route::post('/todo/edit/{id}','ToDoController@update')->name('todoUpdate');
