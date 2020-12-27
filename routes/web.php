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

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PosisiController;

Route::get('/', function () {
    return view('welcome');
});

// Route::prefix('admink')->group(function(){



Route::prefix('karyawan')->middleware(['auth','admin'])->group(function(){

    Route::get('/','KaryawanController@index');
    Route::get('/create','KaryawanController@create');
    Route::post('/store','KaryawanController@store');
    Route::get('/edit/{id}','KaryawanController@edit');
    Route::post('/update/{id}', 'KaryawanController@update');
    Route::delete('/destroy/{id}','KaryawanController@destroy');
    Route::get('/{id}/print','KaryawanController@generateInvoice');
    Route::get('/printall','KaryawanController@printall');
});

//  });

 Route::prefix('status')->middleware(['auth','admin'])->group(function(){
     Route::get('/','StatusController@index');
     Route::get('/create','StatusController@create');
     Route::post('/store','StatusController@store');
     Route::get('/edit/{id}', 'StatusController@edit');
    });

Route::prefix('pendidikan')->middleware(['auth','admin'])->group(function(){
    Route::get('/','PendidikanController@index');
    Route::get('/create', 'PendidikanController@create');
    Route::post('/store', 'PendidikanController@store');
    Route::get('/edit/{id}','PendidikanController@edit');
    Route::post('/update/{id}', 'PendidikanController@update');
});



Route::prefix('posisi')->middleware(['auth','admin'])->group(function(){
    Route::get('/','PosisiController@index');
    Route::get('/create','PosisiController@create');
    Route::post('/store','PosisiController@store');
    Route::get('/edit/{id}','PosisiController@edit');
    Route::post('/update/{id}','PosisiController@update');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
