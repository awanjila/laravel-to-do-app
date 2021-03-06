<?php

use Illuminate\Support\Facades\Route;

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
Route::get('todos', 'TodosController@index');
Route::get('todos/{todo}', 'Todoscontroller@show');
Route::get('new-todos', 'Todoscontroller@create');
Route::post('store-todos', 'Todoscontroller@store');

Route::get('todos/{todo}/edit', 'Todoscontroller@edit');
Route::post('todos/{todo}/update-todos', 'Todoscontroller@update');
Route::get('todos/{todo}/delete', 'Todoscontroller@destroy');

