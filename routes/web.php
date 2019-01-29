<?php


  Route::get('/', function () {
      return view('master.layouts.app');
 });
//opd routes
Route::get('create','OpdController@create')->name('opd-create');
Route::post('opdstore','OpdController@store')->name('opd.store');	
Route::post('show','OpdController@show')->name('opd-show');
Route::post('add','OpdController@addtreatment')->name('opd-add');
Route::DELETE('delete/{id}','OpdController@destroy')->name('opd.delete');
Route::get('opd/edit/{id}','OpdController@edit')->name('opd.edit');
Route::PUT('opd/update/{id}','OpdController@update')->name('opd.update');
Route::get('opd-datatable', 'OpdController@datatable')->name('opd-filter');
Route::get('datatable/getopd', 'OpdController@getOpd')->name('datatable.getopd');
//opd treatement
Route::post('store','OpdtreatmentsController@store')->name('opdt.store');


//ipd routes
Route::post('/ipd/fetch', 'IpdController@fetch')->name('ipd.fetch');
Route::post('/ipd/fetch-search', 'IpdController@fetchSearch')->name('ipd.fetchSearch');
Route::get('ipd-datatable', 'IpdController@datatable')->name('ipd-filter');
Route::get('getipd', 'IpdController@getIpd')->name('getipd');
Route::get('ipd/edit/{id}','IpdController@edit')->name('ipd.edit');
Route::PUT('ipd/update/{id}','IpdController@update')->name('ipd.update');
Route::DELETE('delete1/{id}','IpdController@destroy')->name('ipd.delete');
Route::get('ipd-create','IpdController@create')->name('ipd-create');
Route::post('ipd-store','IpdController@store')->name('ipd.store');
//ot routes
Route::get('ot-create','OtController@create')->name('ot-create');
Route::post('ot-store','OtController@store')->name('ot.store');
Route::post('/ot/fetch', 'OtController@fetch')->name('ot.fetch');
Route::post('/ot/fetch-search', 'OtController@fetchSearch')->name('ot.fetchSearch');
Route::get('ot-datatable', 'OtController@datatable')->name('ot-filter');
Route::get('getposts2', 'OtController@getOt')->name('getot');
Route::delete('delete2/{id}','OtController@destroy')->name('ot.delete');
Route::PUT('ot/update/{id}','OtController@update')->name('ot.update');
Route::get('ot/edit/{id}','OtController@edit')->name('ot.edit');
Route::post('ot/show','OtController@show')->name('ot-show');


//blood routes
Route::get('blood-create','BloodexaminationController@create')->name('blood-create');
Route::post('blood-store','BloodexaminationController@store')->name('blood.store');
//general blood routes
Route::get('generalblood-create','GeneralbloodController@create')->name('generalblood-create');
Route::post('generalblood-store','GeneralbloodController@store')->name('generalblood.store');
//semen routes
Route::get('semen-create','SemenexaminationController@create')->name('semen-create');
Route::post('semen-store','SemenexaminationController@store')->name('semen.store');
//serun routes
Route::get('serun-create','SerumofwidalController@create')->name('serun-create');
Route::post('serun-store','SerumofwidalController@store')->name('serun.store');
//stool routes
Route::get('stool-create','StoolexaminationController@create')->name('stool-create');
Route::post('stool-store','StoolexaminationController@store')->name('stool.store');

//urine routes
Route::get('urine-create','UrineexaminationController@create')->name('urine-create');
Route::post('urine-store','UrineexaminationController@store')->name('urine.store');
//xray routes
Route::get('xray-create','XrayController@create')->name('xray-create');
Route::post('xray-store','XrayController@store')->name('xray.store');
//ecg routes
Route::get('ecg-create','EcgexaminationController@create')->name('ecg-create');
Route::post('ecg-store','EcgexaminationController@store')->name('ecg.store');

//physiotherpy routes

Route::get('physiotherpy-create','PhysiotherpyController@create')->name('physiotherpy-create');
Route::post('physiotherpy-store','PhysiotherpyController@store')->name('physiotherpy.store');
Route::delete('physiotherpy-delete/{id}','PhysiotherpyController@destroy')->name('physco.delete');
 Route::PUT('physiotherpy/update/{id}','PhysiotherpyController@update')->name('physiotherpy.update');
Route::get('physiotherpy/edit/{id}','PhysiotherpyController@edit')->name('physiotherpy.edit');
Route::get('getphysco', 'PhysiotherpyController@getphysco')->name('getphysco');
Route::get('Physiotherpy/datatable', 'PhysiotherpyController@datatable')->name('physiotherpy-filter');
Route::post('/physiotherpy/fetch', 'PhysiotherpyController@fetch')->name('physiotherpy.fetch');
Route::post('/physiotherpy/physiotherpy-search', 'PhysiotherpyController@fetchSearch')->name('physiotherpy.fetchSearch');
Route::post('/physiotherpy/view','PhysiotherpyController@show')->name('Physiotherpy-show');

//yoga routes
Route::get('yoga-create','YogaController@create')->name('yoga.create');
Route::post('yoga-store','YogaController@store')->name('yoga.store');
Route::get('getyoga', 'YogaController@getyoga')->name('getyoga');
Route::get('yoga/datatable', 'YogaController@datatable')->name('yoga-filter');
Route::post('/yoga/fetch', 'YogaController@fetch')->name('yoga.fetch');
Route::post('/yoga/yoga-search', 'YogaController@fetchSearch')->name('yoga.fetchSearch');
Route::DELETE('yoga/delete/{id}','YogaController@destroy')->name('yoga.delete');
 Route::PUT('yoga/update/{id}','YogaController@update')->name('yoga.update');
Route::get('yoga/edit/{id}','YogaController@edit')->name('yoga.edit');
Route::post('/yoga/view','YogaController@show')->name('yoga-show');