<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Upload;
use App\Timesheet;


class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('upload_files.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function upload(Request $request){

        //return $request->all();
        $upload = Upload::create($request->all());

        if($request->hasFile('file')){
            $path = $request->file('file')->store('/public');
            //$path = $request->file('file')->storeAS('/', $request->file('file')->getClientOriginalName());
            $filename = pathinfo($path);
            $upload->file = $filename['basename'];
            $upload->update();
            //return Storage::download($path);
            return Storage::url($path);

        }else{
            return 'no file';
        }



        


    }

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
        $upload = Upload::create($request->all());

        if($request->hasFile('file')){
            $path = $request->file('file')->store('/public');

            $time_stamps = new \App\Imports\TimesheetsImport();
            $time_stamps->import(storage_path('app/'.$path));
            $filename = pathinfo($path);
            $upload->file = $filename['basename'];
            $upload->update();

            return redirect('upload-file/index');
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
