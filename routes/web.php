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

Route::get('/rfid', function () {
    return view('rfid');
});

Route::get('/schedule/index', 'TaskController@index');
Route::get('/schedule/create', 'TaskController@create');
Route::post('/schedule/save', 'TaskController@store');
Route::get('/schedule/show/{id}','TaskController@show');
Route::patch('/schedule/show/{id}','TaskController@update');

Route::get('/machine/index', 'Rfid_machineController@index');
Route::get('/machine/create', 'Rfid_machineController@create');
Route::post('/machine/save', 'Rfid_machineController@store');
Route::get('/machine/show/{id}','Rfid_machineController@show');
Route::patch('/machine/show/{id}','Rfid_machineController@update');



Route::get('/menu', function() {
	return view('layouts/menu');
});



Route::get('/calendar/index', 'CalendarController@index');
Route::get('/calendar/create', 'CalendarController@create');
Route::post('/calendar/save', 'CalendarController@store');
Route::get('/calendar/search','CalendarController@search');
Route::post('/calendar/searchs','CalendarController@searchs');


Route::get('/report', function () {
    return view('report.index');
});


Route::get('/upload-file/index', 'UploadController@index');
Route::post('/upload-file/save', 'UploadController@store');

Route::get('/teacher/index', 'TeacherController@index');
Route::get('/teacher/teachers', 'TeacherController@teachers');

Route::post('/teacher/teacher-save', 'TeacherController@store');
Route::get('/teacher/show/{id}','TeacherController@show');
Route::patch('/teacher/show/{id}','TeacherController@update');

Route::get('/student/index', 'StudentController@index');
Route::get('/student/student', 'StudentController@students');
Route::post('/student/student-save', 'StudentController@store');

Route::get('/calendar/{id}', 'CalendarController@show');
Route::patch('/calendar/{id}','CalendarController@update');
Route::get('/get-calendar', function(){
    return \App\Calendar::with('task')->get();
});

Route::get('/timesheet/index', 'TimesheetController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/task', function () {
    return \App\Task::find(request()->input('taskId'));
});