<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('manageItem', 'App\Http\Controllers\BarangController@data');
Route::get('edit/{id}', 'App\Http\Controllers\BarangController@edit');
Route::get('add', 'App\Http\Controllers\BarangController@add');
Route::post('manageItem', 'App\Http\Controllers\BarangController@addProcess');
Route::patch('manageItem/{id}', 'App\Http\Controllers\BarangController@editProcess');
Route::delete('manageItem/{id}', 'App\Http\Controllers\BarangController@delete');
Route::get('search', 'App\Http\Controllers\BarangController@search');