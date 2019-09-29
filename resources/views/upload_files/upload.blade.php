@extends('layouts.navbar')

@section('content')

	<div class="container">
            <div class="py-5 text-center">
                <h1>File ข้อมูลทาบบัตร</h1>
                <form action="save" method="post" enctype="multipart/form-data">
                    
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">

                    <label for="file">เลือกไฟล์ข้อมูลทาบบัตร:</label>
                    <input type="file" name="file" id="file">
                    <input class="btn btn-primary" type="submit" value="Upload" name="submit">
					
                </form>
            </div>
	</div>

@endsection