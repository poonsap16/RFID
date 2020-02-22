<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Task;




class TaskController extends Controller
{

    public function index()
    {
        return redirect('/schedule/create');
    }


    public function create()
    {
        $tasks = \App\Task::all(); 
        $rfid_machines = \App\Rfid_machine::all();
        return view('schedule.create')
                    ->with(['tasks' => $tasks,'rfid_machines' => $rfid_machines]); 
    }

    public function edit($id)
    {
        $tasks = \App\Task::all(); 
        $task = \App\Task::find($id);


        $rfid_machines = \App\Rfid_machine::all();
            
        return view('schedule.edit')->with(['tasks' => $tasks,'task' => $task, 'rfid_machines' => $rfid_machines]);
       
    }

    public function store(Request $request)
    {

        $request->validate([

            'task_job_id' => 'required',
            'task_name' => 'required',
            'task_Acronym' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'before_time' => 'required',
            'after_time' => 'required',
            'late_time' => 'required',
            'job_id' => 'required',
            'job_type' => 'required',
            'rfid_machine_id' => 'required',
            'work_hour' => 'required'

        ], [

            'task_job_id.required' => 'กรุณาใส่ รหัสกิจกรรม',
            'task_name.required' => 'กรุณาใส่ ชื่อกิจกรรม',
            'task_Acronym.required' => 'กรุณาใส่ ชื่อย่อกิจกรรม',
            'start_time.required' => 'กรุณาใส่ เวลาเริ่มกิจกรรม',
            'end_time.required' => 'กรุณาใส่ เวลาสิ้นสุดกิจกรรม',
            'before_time.required' => 'กรุณาใส่ เวลาก่อนกิจกรรม',
            'after_time.required' => 'กรุณาใส่ เวลาหลังกิจกรรม',
            'late_time.required' => 'กรุณาใส่ เวลาสาย',
            'job_id.required' => 'กรุณาใส่ รหัสภาระงาน',
            'job_type.required' => 'กรุณาใส่ ประเภทภาระงาน',
            'rfid_machine_id.required' => 'กรุณาใส่ เครื่องทาบบัตร',
            'work_hour.required' => 'กรุณาใส่ ชั่วโมงภาระงาน'
        ]);


        // $this->validateData($request);
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

        $rfid_machines = \App\Rfid_machine::all();
            
        //return $task;
        return view('schedule.index')->with(['tasks' => $tasks,'task' => $task, 'rfid_machines' => $rfid_machines]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $task = \App\Task::find($id)->update($request->all());
        // return redirect()->back()->with('success', 'แก้ไขข้อมูลเรียบร้อยแล้ว');
        return redirect('/schedule/create')->with('success', 'แก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task=\App\Task::find($id);
        $task->delete();
        return redirect('/schedule/create')->with('success','ลบข้อมูลเรียบร้อยแล้ว');
    }

}
