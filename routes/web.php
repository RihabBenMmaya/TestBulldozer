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

Route::get('/links/create', 'LinkController@create');
Route::post('/links/create', 'LinkController@store');
Route::resource('links', 'LinkController');
Route::get('logActivity', 'HomeController@logActivity');
Route::get('add-to-log', 'HomeController@myTestAddToLog');