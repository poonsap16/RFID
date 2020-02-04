<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use App\Timesheet;
use App\Calendar;
class TimesheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $timesheets = \App\Timesheet::all(); 
       $calendars = \App\Calendar::all(); 
       
       $data = DB::table('timesheets')
                    ->join('calendars', 'timesheets.date_stamp', '=', 'calendars.date')
                    ->select('timesheets.sap_id', 'timesheets.date_stamp', 'timesheets.time_stamp', 'calendars.start_time', 'calendars.end_time')
                    //->whereBetween('timesheets.time_stamp', ['calendars.start_time', 'calendars.end_time'])
                    // ->whereBetween('time',array($timfrom,$timto))
                    // ->whereBetween('timesheets.time_stamp', ['08:00:00', '09:00:00'])

                    ->get();

       return $data;

        // $users = DB::table('users')
        //             ->whereNotBetween('votes', [1, 100])
        //             ->get();
       // $users = DB::table('users')
       //      ->join('contacts', 'users.id', '=', 'contacts.user_id')
       //      ->join('orders', 'users.id', '=', 'orders.user_id')
       //      ->select('users.*', 'contacts.phone', 'orders.price')
       //      ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
