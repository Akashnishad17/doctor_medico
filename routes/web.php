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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','admin']], function(){
	Route::get('/dashboard', function () {
    	return view('admin.dashboard');
	});
	Route::get('/role-register','Admin\DashboardController@registered');
	Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
	Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
	Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');
	Route::get('/abouts','Admin\AboutusController@index');
	Route::post('/save-aboutus','Admin\AboutusController@store');
});

Route::group(['middleware' => ['auth','patient']], function(){
	Route::get('/patient', function () {
		return view('patient.dashboard');
	});
	Route::get('/get-appointment','Patient\AppointmentController@getappointment');
	Route::post('/store-appointment','Patient\AppointmentController@storeappointment');
	Route::get('/show-appointment','Patient\AppointmentController@showappointment');
});

Route::group(['middleware' => ['auth','doctor']], function(){
	Route::get('/doctor', function () {
		return view('doctor.dashboard');
	});
	Route::get('/appointment-notifications','Doctor\NotificationController@showappointment');
});