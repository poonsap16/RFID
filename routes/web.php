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

Route::get('/rfid', function () {
    return view('rfid');
});

Route::get('/menu', function() {
	return view('layouts/menu');
});

Route::get('/test', function() {
	return view('calendars/test');
});

Route::get('/schedule/index', 'TaskController@index');
Route::get('/schedule/create', 'TaskController@create');
Route::post('/schedule/save', 'TaskController@store');
Route::get('/schedule/show/{id}','TaskController@show');
Route::get('/schedule/tasks/{id}','TaskController@edit');
Route::patch('/schedule/tasks/{id}','TaskController@update');

Route::get('/machine/index', 'Rfid_machineController@index');
Route::get('/machine/create', 'Rfid_machineController@create');
Route::post('/machine/save', 'Rfid_machineController@store');
Route::get('/machine/show/{id}','Rfid_machineController@show');

Route::get('/calendar/index', 'CalendarController@index');
Route::get('/calendar/create', 'CalendarController@create');
Route::post('/calendar/save', 'CalendarController@store');

Route::get('/report', function () {
    return view('report.index');
});

Route::get('/upload-file/index', 'UploadController@index');
Route::post('/upload-file/upload', 'UploadController@upload');

Route::get('/upload-file/upload', 'UploadController@index');
Route::post('/upload-file/save', 'UploadController@store');
