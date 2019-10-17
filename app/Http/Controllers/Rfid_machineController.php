<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Rfid_machineController extends Controller
{

    public function index()
    {
        $rfid_machine = \App\Rfid_machine::all(); 
        return view('machines.index')->with(['rfid_machines' => $rfid_machine]);  
    }


    public function create()
    {
        return view('machines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $taskCreateValidateRules = [
            'machine_name' => 'required',
            'location' => 'required',
            'building' => 'required',
            'floor' => 'required'
        ];

        $taskCreatevalidateMessages = [
        'machine_name.required' => 'กรุณาใส่ชื่อเครื่อง <a style="cursor: pointer;" onclick="document.getElementById(' . "'machine_name'" . ').focus()"><i>ประเภทงาน</i> <b>ด้วย</b></a>',
        'location.required' => 'กรุณาใส่สถานที่ <a style="cursor: pointer;" onclick="document.getElementById(' . "'location'" . ').focus()"><i>ชื่องาน</i> <b>ด้วยสิอีช่อ</b></a>',
        'building.required' => 'กรุณาใส่ชื่อตึก <a style="cursor: pointer;" onclick="document.getElementById(' . "'building'" . ').focus()"><i>ประเภทงาน</i> <b>ด้วย</b></a>',
        'floor.required' => 'กรุณาใส่ชั้น <a style="cursor: pointer;" onclick="document.getElementById(' . "'floor'" . ').focus()"><i>ชื่องาน</i> <b>ด้วย</b></a>'
        ];

        request()->validate($taskCreateValidateRules, $taskCreatevalidateMessages);

        $rfid_machine = \App\Rfid_machine::create(request()->all());
        $rfid_machine->save();

        return redirect('machine/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rfid_machines = \App\Rfid_machine::all();
        $rfid_machine = \App\Rfid_machine::find($id); 
        return view('machines.index')->with(['rfid_machines' => $rfid_machines, 'rfid_machine' => $rfid_machine]);
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
