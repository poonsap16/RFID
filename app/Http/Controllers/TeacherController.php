<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use App\Upload;
use App\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function teachers()
    {
        $teachers = \App\Teacher::TeacherAll()->paginate(20); 
        //return $teachers;
        return view('teachers.index')->with(['teachers' => $teachers]);  


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
        if($request->hasFile('file')){
            $path = $request->file('file')->store('/public');
            $filename = pathinfo($path);

            $upload = Upload::create($request->except('file') + ['file' => $filename['basename']]);

            $time_stamps = new \App\Imports\TeacherdatasImport();
            $time_stamps->import(storage_path('app/'.$path));
           
            return redirect('upload-file/teacher');
        }else{
            return 'no file';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    
    {
        $teachers = \App\Teacher::all(); 
        $teacher = \App\Teacher::find($id);

        return view('teachers.index')->with(['teachers' => $teachers,'teacher' => $teacher]);
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
