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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

 
Route::get('/user/index', 'UserController@index') -> name('user.index');
Route::get('/user/edit', 'UserController@edit') -> name('user.edit');
Route::post('/user/edit', 'UserController@update') -> name('user.edit');

Route::get('/choka', 'ChokaController@index');
Route::get('/choka/create', 'ChokaController@create') -> name('choka.create');
Route::post('/choka/create', 'ChokaController@store') -> name('choka.create');

Route::get('/choka/{id}', 'ChokaController@show') -> name('choka.show');



