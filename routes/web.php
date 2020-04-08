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

//Controller Function
Route::get('/', 'PageController@index');
Route::get('/plants', 'PageController@plants');
Route::get('/poems', 'PageController@poems');
Route::get('/recipes', 'PageController@recipes');
Route::get('/about_me', 'PageController@about_me');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
