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
        'machine_name.required' => 'กรุณาใส่ <a style="cursor: pointer;" onclick="document.getElementById('. "'machine_name'" . ').focus()"<i>ชื่อเครื่อง</i>ด้วย',
        'location.required' => 'กรุณาใส่สถานที่ด้วย',
        'building.required' => 'กรุณาใส่ชื่อตึกด้วย',
        'floor.required' => 'กรุณาใส่ชั้นด้วย'
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
        $rfid_machine = \App\Rfid_machine::find($id)->update($request->all());
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
