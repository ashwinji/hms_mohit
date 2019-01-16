<?php


Route::get('/', function () {
    return view('master.layouts.app');
});
Route::get('opd-create','OpdController@create')->name('opd-create');
Route::post('opd-store','OpdController@store')->name('opd.store');
Route::get('ot-create','OtController@create')->name('ot-create');
Route::post('ot-store','OtController@store')->name('ot.store');
Route::get('ipd-create','IpdController@create')->name('ipd-create');
Route::post('ipd-store','IpdController@store')->name('ipd.store');
Route::post('/ot/fetch', 'OtController@fetch')->name('ot.fetch');
Route::post('/ot/fetch-search', 'OtController@fetchSearch')->name('ot.fetchSearch');
Route::post('/ipd/fetch', 'IpdController@fetch')->name('ipd.fetch');
Route::post('/ipd/fetch-search', 'IpdController@fetchSearch')->name('ipd.fetchSearch');
Route::get('datatable1', 'OpdController@datatable')->name('opd-filter');
Route::get('datatable/getposts', 'OpdController@getOpd')->name('datatable.getopd');
Route::get('datatable', 'IpdController@datatable')->name('ipd-filter');
Route::get('getposts', 'IpdController@getIpd')->name('getipd');
