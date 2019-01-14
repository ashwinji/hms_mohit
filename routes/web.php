<?php


Route::get('/', function () {
    return view('master.layouts.app');
});
Route::get('opd-create','OpdController@create')->name('opd-create');
Route::post('opd-store','OpdController@store')->name('opd.store');
Route::get('ot-create','OtController@create')->name('ot-create');
Route::post('ot-store','OtController@store')->name('ot.store');
Route::get('ipd-create','ipdController@create')->name('ipd-create');
Route::post('ipd-store','ipdController@store')->name('ipd.store');
Route::post('/ot/fetch', 'OtController@fetch')->name('ot.fetch');
Route::post('/ot/fetch-search', 'OtController@fetchSearch')->name('ot.fetchSearch');