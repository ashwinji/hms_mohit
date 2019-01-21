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

Route::get('blood-create','BloodexaminationController@create')->name('blood-create');
Route::post('blood-store','BloodexaminationController@store')->name('blood.store');

Route::get('generalblood-create','GeneralbloodController@create')->name('generalblood-create');
Route::post('generalblood-store','GeneralbloodController@store')->name('generalblood.store');

Route::get('semen-create','SemenexaminationController@create')->name('semen-create');
Route::post('semen-store','SemenexaminationControllerr@store')->name('semen.store');

Route::get('serun-create','SerumofwidalController@create')->name('serun-create');
Route::post('serun-store','SerumofwidalController@store')->name('serun.store');

Route::get('stool-create','StoolexaminationController@create')->name('stool-create');
Route::post('stool-store','StoolexaminationController@store')->name('stool.store');


Route::get('urine-create','UrineexaminationController@create')->name('urine-create');
Route::post('urine-store','UrineexaminationControllerr@store')->name('urine.store');

Route::get('xray-create','XrayController@create')->name('xray-create');
Route::post('xray-store','XrayControllerr@store')->name('xray.store');

Route::get('ecg-create','EcgexaminationController@create')->name('ecg-create');
Route::post('ecg-store','EcgexaminationControllerr@store')->name('ecg.store');

Route::get('physiotherpy-create','PhysiotherpyController@create')->name('physiotherpy-create');
Route::post('physiotherpy-store','PhysiotherpyController@store')->name('physiotherpy.store');

Route::get('yoga-create','YogaController@create')->name('yoga-create');
Route::post('yoga-store','YogaController@store')->name('yoga.store');


Route::post('/ot/fetch', 'OtController@fetch')->name('ot.fetch');
Route::post('/ot/fetch-search', 'OtController@fetchSearch')->name('ot.fetchSearch');
Route::post('/ipd/fetch', 'IpdController@fetch')->name('ipd.fetch');
Route::post('/ipd/fetch-search', 'IpdController@fetchSearch')->name('ipd.fetchSearch');
Route::get('datatable1', 'OpdController@datatable')->name('opd-filter');
Route::get('datatable/getopd', 'OpdController@getOpd')->name('datatable.getopd');
Route::get('datatable2', 'IpdController@datatable')->name('ipd-filter');
Route::get('getposts1', 'IpdController@getIpd')->name('getipd');
Route::get('delete/{id}','OpdController@destroy')->name('opd.delete');
Route::get('opd-edit','OpdController@edit')->name('opd.edit');
Route::get('ipd-edit','IpdController@edit')->name('ipd.edit');
Route::get('delete1/{id}','OpdController@destroy')->name('ipd.delete');
Route::get('datatable3', 'OtController@datatable')->name('ot-filter');
Route::get('getposts2', 'OtController@getOt')->name('getot');
Route::get('delete2/{id}','OtController@destroy')->name('ot.delete');
Route::get('ot-edit','OtController@edit')->name('ot.edit');


 // Route::resource('opd','OpdController');

