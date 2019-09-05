<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $tasks = \App\Task::all(); 
        

        return view('schedule.index')->with(['tasks' => $tasks]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $task = new \App\Task();
        // $task->task_id = $request->input('task_id');
        // $task->task_name = $request->input('task_name');
        // $task->task_Acronym = $request->input('task_Acronym');
        // $task->start_time = $request->input('start_time');
        // $task->end_time = $request->input('end_time');
        // $task->before_time = $request->input('before_time');
        // $task->after_time = $request->input('after_time');
        // $task->late_time = $request->input('late_time');
        // $task->job_id = $request->input('job_id');
        // $task->job_type = $request->input('job_type');
        // $task->rfid_location = $request->input('rfid_location');
        // $task->work_hour = $request->input('work_hour');
        // $task->save();
        //return view('schedule.activity');
        //return $request->all();
        $validate =[
            'task_id' => 'required',
            'task_name' => 'required|max:50',

            
        ];
        $messageError = [
            'task_id.required' => 'เลือกประเภทงาน',
            'task_name.required' => 'ใส่ชื่องาน',
            'task_name.max' => 'กรอกได้ไม่เกิน 50 ตัวอักษร'
        ];
        $task = \App\Task::create(request()->all());
        $task->save();

        return redirect('schedule/index');
        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tasks = \App\Task::all(); 
        $task = \App\Task::find($id);
        //$tasks = DB::table('tasks')->where



        
        //return $task;
        return view('schedule.index')->with(['tasks' => $tasks,'task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tasks = \App\Task::all();
        $task = \App\Task::find($id);
        return view('schedule.edit')->with(['task' => $task]); 
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
