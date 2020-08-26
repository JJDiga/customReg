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

// Register
Route::get('/register', 'UsersController@showRegister')->name('showRegister');
Route::post('/register', 'UsersController@create')->name('register');

// All Users

Route::get('/users', 'UsersController@showUsers')->name('showUsers');