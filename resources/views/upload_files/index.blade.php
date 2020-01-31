@extends('layouts.app')

@section('content')

	<div class="container">
            <div class="py-5 text-center">
                <h3>Upload File ข้อมูลทาบบัตร</h3>
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    Upload Validation Error<br><br>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
                <img src="/images/{{ Session::get('path') }}" widht="300" />
                @endif
                <form action="save" method="post" enctype="multipart/form-data">
                    <label for="file">เลือกไฟล์ที่ต้องการ upload:</label>
                    <input type="file" name="file" id="file">
                    <input class="btn btn-primary" type="submit" value="Upload" name="submit">
					<input type="hidden" value="{{ csrf_token() }}" name="_token">


                    <div class="form-row">
                        <input type="checkbox" value="true" name="doNotBeLate"> Do not be late
                    </div>
                    <div class="form-row">
                        <input type="text" name="calendarId" value="2">
                    </div>
                </form>
            </div>
	</div>

@endsection