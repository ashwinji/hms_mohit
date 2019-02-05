<?php


  Route::get('/', function () {
      return view('master.layouts.app');
 });

  //dash route
  Route::group(['prefix'=>'dashboard'], function(){
  Route::get('/','OpdController@dashboard')->name('dashboard');
});


//opd routes

Route::group(['prefix'=>'opd'], function(){
   
		Route::get('/create','OpdController@create')->name('opd-create');
		Route::post('/store','OpdController@store')->name('opd.store');	
		Route::post('/show','OpdController@show')->name('opd-show');
		Route::post('/add','OpdController@addtreatment')->name('opd-add');
		Route::DELETE('delete/{id}','OpdController@destroy')->name('opd.delete');
		Route::get('/edit/{id}','OpdController@edit')->name('opd.edit');
		Route::PUT('/update/{id}','OpdController@update')->name('opd.update');
		Route::get('/datatable', 'OpdController@datatable')->name('opd-filter');
		Route::get('/getopd', 'OpdController@getOpd')->name('datatable.getopd');
		Route::post('/filter-search','OpdController@filterSearch')->name('filter.search');
});
//opd treatement
Route::post('store','OpdtreatmentsController@store')->name('opdt.store');


//ipd routes
Route::group(['prefix'=>'ipd'], function(){
		Route::post('/fetch', 'IpdController@fetch')->name('ipd.fetch');
		Route::post('/fetch-search', 'IpdController@fetchSearch')->name('ipd.fetchSearch');
		Route::get('/datatable', 'IpdController@datatable')->name('ipd-filter');
		Route::get('/getipd', 'IpdController@getIpd')->name('getipd');
		Route::get('/edit/{id}','IpdController@edit')->name('ipd.edit');
		Route::PUT('/update/{id}','IpdController@update')->name('ipd.update');
		Route::DELETE('/delete1/{id}','IpdController@destroy')->name('ipd.delete');
		Route::get('/create','IpdController@create')->name('ipd-create');
		Route::post('/store','IpdController@store')->name('ipd.store');
		Route::post('/show','IpdController@show')->name('ipd-show');
		Route::post('/discharge','IpdController@discharge')->name('ipd-discharge');

});

//ot routes
Route::group(['prefix'=>'ot'], function(){
		Route::get('/create','OtController@create')->name('ot-create');
		Route::post('/store','OtController@store')->name('ot.store');
		Route::post('/fetch', 'OtController@fetch')->name('ot.fetch');
		Route::post('/fetch-search', 'OtController@fetchSearch')->name('ot.fetchSearch');
		Route::get('/datatable', 'OtController@datatable')->name('ot-filter');
		Route::get('/get/getot', 'OtController@getOt')->name('getot');
		Route::DELETE('/delete/{id}','OtController@destroy')->name('ot.delete');
		Route::PUT('/update/{id}','OtController@update')->name('ot.update');
		Route::get('/edit/{id}','OtController@edit')->name('ot.edit');
		Route::post('/show','OtController@show')->name('ot-show');
});

//blood routes
Route::group(['prefix'=>'bloodexamination'], function(){
		Route::get('/create','BloodexaminationController@create')->name('blood-create');
		Route::post('/store','BloodexaminationController@store')->name('blood.store');
		Route::get('/datatable','BloodexaminationController@datatable')->name('blood-filter');
		Route::get('/sendblooddata','BloodexaminationController@sendblooddata')->name('sendblooddata');
		Route::delete('/delete/{id}','BloodexaminationController@destroy')->name('blood.delete');
		Route::get('/edit/{id}','BloodexaminationController@edit')->name('bloodexamination.edit');
		Route::PUT('/update/{id}','BloodexaminationController@update')->name('blood.update');
		Route::post('/fetch', 'BloodexaminationController@fetch')->name('bloodexamination.fetch');
		Route::post('/bloodexamination-search', 'BloodexaminationController@fetchSearch')->name('bloodexamination.fetchSearch');
		Route::post('/view','BloodexaminationController@show')->name('bloodexamination-show');
});

//general blood routes
Route::group(['prefix'=>'generalblood'], function(){
		Route::get('/create','GeneralbloodController@create')->name('generalblood-create');
		Route::post('/store','GeneralbloodController@store')->name('generalblood.store');
		Route::get('/datatable','GeneralbloodController@datatable')->name('generalblood-filter');
		Route::get('/sendgeneralblooddata','GeneralbloodController@sendgeneralblooddata')->name('sendgeneralblooddata');
		Route::delete('/delete/{id}','GeneralbloodController@destroy')->name('generalblood.delete');
		Route::get('/edit/{id}','GeneralbloodController@edit')->name('generalblood.edit');
		Route::PUT('/update/{id}','GeneralbloodController@update')->name('generalblood.update');
		Route::post('/view','GeneralbloodController@show')->name('generalblood-show');
});

//semen routes
Route::group(['prefix'=>'semen'], function(){
		Route::get('/create','SemenexaminationController@create')->name('semen-create');
		Route::post('/store','SemenexaminationController@store')->name('semen.store');

		Route::get('/datatable', 'SemenexaminationController@datatable')->name('semen-filter');
		Route::get('/sendsemendata','SemenexaminationController@sendsemendata')->name('sendsemendata');
		Route::delete('/delete/{id}','SemenexaminationController@destroy')->name('semen.delete');
		Route::post('/view','SemenexaminationController@show')->name('semen-show');
		Route::PUT('/update/{id}','SemenexaminationController@update')->name('semen.update');
		Route::get('/edit/{id}','SemenexaminationController@edit')->name('semen.edit');
});

//serun routes
Route::group(['prefix'=>'serun'], function(){
		Route::get('/create','SerumofwidalController@create')->name('serun-create');
		Route::post('/store','SerumofwidalController@store')->name('serun.store');
});

//stool route
Route::group(['prefix'=>'stool'], function(){
		Route::get('/create','StoolexaminationController@create')->name('stool-create');
		Route::post('/store','StoolexaminationController@store')->name('stool.store');
});

//urine routes
Route::group(['prefix'=>'urine'], function(){
		Route::get('urine/create','UrineexaminationController@create')->name('urine-create');
		Route::post('urine/store','UrineexaminationController@store')->name('urine.store');
});
//xray routes
Route::group(['prefix'=>'xray'], function(){
		Route::get('xray/create','XrayController@create')->name('xray-create');
		Route::post('xray/store','XrayController@store')->name('xray.store');
});

//ecg routes
Route::group(['prefix'=>'ecg'], function(){
		Route::get('/create','EcgexaminationController@create')->name('ecg-create');
		Route::post('/store','EcgexaminationController@store')->name('ecg.store');
		Route::post('/fetch', 'EcgexaminationController@fetch')->name('ecg.fetch');
		Route::post('/ecg-fetchSearch', 'EcgexaminationController@fetchSearch')->name('ecg.fetchSearch');
		Route::get('/datatable', 'EcgexaminationController@datatable')->name('ecg-filter');
		Route::get('/sendecgdata','EcgexaminationController@sendecgdata')->name('sendecgdata');
		Route::delete('/delete/{id}','EcgexaminationController@destroy')->name('ecg.delete');
		Route::post('/view','EcgexaminationController@show')->name('ecg-show');
		Route::PUT('/update/{id}','EcgexaminationController@update')->name('ecg.update');
		Route::get('/edit/{id}','EcgexaminationController@edit')->name('ecg.edit');
});
//physiotherpy routes
Route::group(['prefix'=>'physiotherpy'], function(){
		   
		Route::get('/create','PhysiotherpyController@create')->name('physiotherpy-create');
		Route::post('/store','PhysiotherpyController@store')->name('physiotherpy.store');
		Route::delete('/delete/{id}','PhysiotherpyController@destroy')->name('physco.delete');
		 Route::PUT('/update/{id}','PhysiotherpyController@update')->name('physiotherpy.update');
		Route::get('/edit/{id}','PhysiotherpyController@edit')->name('physiotherpy.edit');
		Route::get('/getphysco', 'PhysiotherpyController@getphysco')->name('getphysco');
		Route::get('/datatable', 'PhysiotherpyController@datatable')->name('physiotherpy-filter');
		Route::post('/fetch', 'PhysiotherpyController@fetch')->name('physiotherpy.fetch');
		Route::post('/physiotherpy-search', 'PhysiotherpyController@fetchSearch')->name('physiotherpy.fetchSearch');
		Route::post('/view','PhysiotherpyController@show')->name('Physiotherpy-show');
});

//yoga routes
Route::group(['prefix'=>'yoga'], function(){
		Route::get('/create','YogaController@create')->name('yoga.create');
		Route::post('/store','YogaController@store')->name('yoga.store');
		Route::get('/getyoga', 'YogaController@getyoga')->name('getyoga');
		Route::get('/datatable', 'YogaController@datatable')->name('yoga-filter');
		Route::post('/fetch', 'YogaController@fetch')->name('yoga.fetch');
		Route::post('/yoga-search', 'YogaController@fetchSearch')->name('yoga.fetchSearch');
		Route::DELETE('/delete/{id}','YogaController@destroy')->name('yoga.delete');
		 Route::PUT('/update/{id}','YogaController@update')->name('yoga.update');
		Route::get('/edit/{id}','YogaController@edit')->name('yoga.edit');
		Route::post('/view','YogaController@show')->name('yoga-show');
});
//doctorlist
Route::group(['prefix'=>'doctor'], function(){

		Route::get('/','DoctorlistController@index')->name('doctor');

		Route::get('/adddoctor','DoctorlistController@create')->name('doctor.create');

		Route::post('/storedoctor','DoctorlistController@store')->name('doctor.store');

		Route::get('doctordelete/{id}','DoctorlistController@destroy')->name('doctor.destroy');

		Route::get('/edit/{id}','DoctorlistController@edit')->name('doctor.edit');
        Route::post('/update/{id}','DoctorlistController@update')->name('doctor.update');



});

//medicinelist
Route::group(['prefix'=>'medicine'], function(){

		Route::get('/','MedicineController@index')->name('medicine');

		Route::get('/addmedicine','MedicineController@create')->name('medicine.create');

		Route::post('/storemedicine','MedicineController@store')->name('medicine.store');

		Route::get('delete/{id}','MedicineController@destroy')->name('medicine.destroy');

		Route::get('/edit/{id}','MedicineController@edit')->name('medicine.edit');
        Route::post('/update/{id}','MedicineController@update')->name('medicine.update');



});

//departmentlist
Route::group(['prefix'=>'department'], function(){

		Route::get('/','DepartmentController@index')->name('department');

		Route::get('/adddepartment','DepartmentController@create')->name('department.create');

		Route::post('/storedepartment','DepartmentController@store')->name('department.store');

		Route::get('delete/{id}','DepartmentController@destroy')->name('department.destroy');

		Route::get('/edit/{id}','DepartmentController@edit')->name('department.edit');
        Route::post('/update/{id}','DepartmentController@update')->name('department.update');



});
//investigationlist
Route::group(['prefix'=>'investigation'], function(){

		Route::get('/','InvestigationController@index')->name('investigation');

		Route::get('/addinvestigation','InvestigationController@create')->name('investigation.create');

		Route::post('/storeinvestigation','InvestigationController@store')->name('investigation.store');

		Route::get('delete/{id}','InvestigationController@destroy')->name('investigation.destroy');

		Route::get('/edit/{id}','InvestigationController@edit')->name('investigation.edit');
        Route::post('/update/{id}','InvestigationController@update')->name('investigation.update');



});
//dietPlan
Route::group(['prefix'=>'dietPlan'], function(){

		Route::get('/','DietPlanController@index')->name('dietPlan');

		Route::get('/adddietPlan','DietPlanController@create')->name('dietPlan.create');

		Route::post('/storedietPlan','DietPlanController@store')->name('dietPlan.store');

		Route::get('delete/{id}','DietPlanController@destroy')->name('dietPlan.destroy');

		Route::get('/edit/{id}','DietPlanController@edit')->name('dietPlan.edit');
        Route::post('/update/{id}','DietPlanController@update')->name('dietPlan.update');



});

//potency

Route::group(['prefix'=>'potency'], function(){

		Route::get('/','PotencyController@index')->name('potency');

		Route::get('/addpotency','PotencyController@create')->name('potency.create');

		Route::post('/storepotency','PotencyController@store')->name('potency.store');

		Route::get('delete/{id}','PotencyController@destroy')->name('potency.destroy');

		Route::get('/edit/{id}','PotencyController@edit')->name('potency.edit');
        Route::post('/update/{id}','PotencyController@update')->name('potency.update');



});

