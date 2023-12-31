<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/studentdata', 'App\Http\Controllers\StudentController@index');
Route::post('/studentdata/create', 'App\Http\Controllers\StudentController@create');
Route::get('/studentdata/{id}/edit', 'App\Http\Controllers\StudentController@edit');
Route::post('/studentdata/{id}/update', 'App\Http\Controllers\StudentController@update');
Route::get('/studentdata/{id}/delete', 'App\Http\Controllers\StudentController@delete');
