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
    return view('index');
});

Auth::routes();

Route::get('/', 'IndexController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/portal', 'PortalController@index')->name('portals');
Route::post('/portal', 'PortalController@create')->name('portals.create');
