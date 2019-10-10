<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function calendar()
    {
        return view('calendars.calendar')->with('data',\App\Calendar::all());
        
    }

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
        //$calendar = \App\Calendar::create(request()->all());
        $calendar = new \App\Calendar();
        $calendar->date = $request->input('date');        
        $calendar->task_id = $request->input('task_job_id');
        $calendar->save();

        //return $calendar;

        return redirect('calendar/index');
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
