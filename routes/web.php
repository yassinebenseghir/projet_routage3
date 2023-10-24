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

Route::get('/mot', 'App\Http\Controllers\MyController@mot')->name('mot');

Route::get('/filieres', 'App\Http\Controllers\MyController@filieres')->name('filieres');

Route::get('/contact', 'App\Http\Controllers\MyController@contact')->name('contact');