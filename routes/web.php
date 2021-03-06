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
    return view('master');
});

Route::get('/api/v1/alunos/{id?}', 'alunos@index');
Route::post('/api/v1/alunos', 'alunos@store');
Route::post('/api/v1/alunos/{id}', 'alunos@update');
Route::delete('/api/v1/alunos/{id}', 'alunos@destroy');
