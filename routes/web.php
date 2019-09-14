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

// Route::get('/rfid', function () {
//     return view('rfid');
// });

// Route::get('/schedule', function () {
//     return view('schedule/activity');
// });

Route::get('/schedule/index', 'TaskController@index');
Route::get('/schedule/create', 'TaskController@create');
Route::post('/schedule/save', 'TaskController@store');
Route::get('/schedule/show/{id}','TaskController@show');

Route::get('/schedule/tasks/{id}','TaskController@edit');

Route::patch('/schedule/tasks/{id}','TaskController@update');

Route::get('/machine/create', 'Rfid_machineController@create');
Route::post('/machine/save', 'Rfid_machineController@store');

