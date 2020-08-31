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

Route::get('/kindergartens', 'KindergartensController@index')->name('kindergartens.index');
Route::get('/kindergartens/create', 'KindergartensController@create')->name('kindergartens.create');
Route::post('/kindergartens', 'KindergartensController@store')->name('kindergartens.store');
Route::get('/kindergartens/{id}', 'KindergartensController@show')->name('kindergartens.show');
Route::get('/kindergartens/{id}/edit', 'KindergartensController@edit')->name('kindergartens.edit');
Route::match(['put', 'patch'], '/kindergartens/{id}', 'KindergartensController@update')->name('kindergartens.update');
Route::delete('/kindergartens/{id}', 'KindergartensController@destroy')->name('kindergartens.destroy');
