<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendar = \App\Calendar::all();
        $tasks = \App\Task::all();
        return view('calendars.index')->with(['calendars' => $calendar, 'tasks' => $tasks]);
        //return view('machines.index')->with(['rfid_machines' => $rfid_machine]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tasks = \App\Task::all();
        return view('calendars.create')->with(['tasks' => $tasks]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $calendar = \App\Calendar::create(request()->all());
        // $calendar = new \App\Calendar();
        // $calendar->date = $request->input('date');        
        // $calendar->task_id = $request->input('task_id');
        // $calendar->start_time = $request->input('start_time');
        // $calendar->end_time = $request->input('end_time');
        // $calendar->color = $request->input('color');
        // $calendar->save();
        
  

        return redirect()->back();
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

        $calendar = Calendar::find($id);

        return view('calendars.index')->with(['tasks' => $tasks, 'calendar' => $calendar]);
    }

    public function search()
    {
        $tasks = \App\Task::all(); 
        // $task = \App\Task::find($id);
        //$tasks = DB::table('tasks')->where

        return view('calendars.search')->with(['tasks' => $tasks]);
        //$rfid_machines = \App\Rfid_machine::all();
            
        //return $task;
        //return view('schedule.index')->with(['tasks' => $tasks,'task' => $task, 'rfid_machines' => $rfid_machines]);
    }

    public function searchs(Request $request)
    {

        //return $request->all();
        $event = $request->task_id;
        //return $event;
        $tasks = \App\Task::find($event);
        //return $tasks;
        return view('calendars.add_calendar')->with(['tasks' => $tasks]);
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

        //return $request->all();
        $calendar = Calendar::find($id)->update($request->all());
        //$calendar = Calendar::find($id);
        //return $calendar;
        return redirect()->back()->with('success', 'แก้ไขข้อมูลเรียบร้อยแล้ว'); 
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
