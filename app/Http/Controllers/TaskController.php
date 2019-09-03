<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Task;




class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schedule.activity');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new \App\Task();
        $task->task_id = $request->input('task_id');
        $task->task_name = $request->input('task_name');
        $task->task_Acronym = $request->input('task_Acronym');
        $task->start_time = $request->input('start_time');
        $task->end_time = $request->input('end_time');
        $task->before_time = $request->input('before_time');
        $task->after_time = $request->input('after_time');
        $task->late_time = $request->input('late_time');
        $task->job_id = $request->input('job_id');
        $task->job_type = $request->input('job_type');
        $task->rfid_location = $request->input('rfid_location');
        $task->work_hour = $request->input('work_hour');
        $task->save();
        //return view('schedule.activity');
        return $request->all();
        
        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
