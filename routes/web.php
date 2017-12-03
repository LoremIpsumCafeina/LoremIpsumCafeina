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

Route::get('/logar', 'HomeController@login');


Auth::routes();

Route::get('/home', 'HomeController@home');
Route::get('/home2', 'HomeController2@home');
Route::get('/content', 'Content@content');