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

Route::get('/schedule/index', 'TaskController@index');
Route::get('/schedule/create', 'TaskController@create');
Route::get('/schedule/show/{id}','TaskController@show');
Route::post('/schedule/save', 'TaskController@store');


//

Route::get('/menu', function() {
	return view('layouts/menu');
});
Route::get('/schedule/index', 'TaskController@index');
Route::get('/schedule/create', 'TaskController@create');
Route::post('/schedule/save', 'TaskController@store');
Route::get('/schedule/show/{id}','TaskController@show');
>>>>>>> cf0a0f24c7d41b8265e768f54eea02696b6ab428
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

// Route::get('/upload-file/index', 'UploadController@index');
// Route::post('/upload-file/upload', 'UploadController@upload');

Route::get('/upload-file/index', 'UploadController@index');
Route::post('/upload-file/save', 'UploadController@store');

Route::get('/calendar/{id}', 'CalendarController@show');
Route::get('/get-calendar', function(){
    return \App\Calendar::with('task')->get();
});