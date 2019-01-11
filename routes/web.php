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
    return view('master.layouts.app');
});
Route::get('opd-create','OpdController@create')->name('opd-create');
Route::post('opd-store','OpdController@store')->name('opd.store');
Route::get('ot-create','OtController@create')->name('ot-create');
Route::post('ot-store','OtController@store')->name('ot.store');
