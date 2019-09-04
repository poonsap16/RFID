@extends('layouts.navbar')



@section('content')

	<form class="border border-light p-5" action="{{ url('/schedule/task', $task-id)}}" method="post">
	  <div><h3>Edit Form</h3></div>	

	  <input type="hidden" name="_token" value="{{ csrf_token() }}"> </br>
	  <input type="hidden" name="_method" value="PATCH">
	<!--    @if($message = Session::get('success'))
	     <div class="alert alert-success">
	       {{$message}}
	     </div>
	   @endif
	   @if($errors->any())
	     <div class="alert alert-danger">
	       <ul>
	         @foreach($errors->all() as $error)
	           <li> {{$error}}</li>
	         @endforeach
	       </ul>
	     </div>
	   @endif -->

		<div class="form-row">
		  	<div class="form-group  col-sm-2">
			    <label for="task_id">รหัสกิจกรรม</label>
			    <input type="number" class="form-control" id="task_id" name="task_id" value="{{old('task_id',$task->task_id)}}">
			</div>
			<div class="form-group col-sm-4">
			    <label for="task_name">ชื่อกิจกรรม:</label>
			    <input type="text" class="form-control" id="task_name" name="task_name" value="{{old('task_name',$task->task_name)}}">
			</div>
	  	</div>

	  	<div class="form-row">
		  	<div class="form-group  col-sm-2">
			    <label for="task_Acronym">ชื่อย่อกิจกรรม</label>
			    <input type="text" class="form-control" id="task_Acronym" name="task_Acronym" value="{{old('task_Acronym',$task->task_Acronym)}}">
			</div>
	  	</div>

		<div class="form-row">
			<div class="form-group col-sm-2">
			   	<label for="start_time">เวลาเริ่มกิจกรรม</label>
				<input type="time" class="form-control" id="start_time" name="start_time" value="{{old('start_time',$task->start_time)}}">
			</div>
			<div class="form-group col-sm-2">
			    <label for="end_time">เวลาสิ้นสุดกิจกรรม:</label>
			    <input type="time" class="form-control" id="end_time" name="end_time" value="{{old('end_time',$task->end_time)}}">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-sm-2">
				<label for="before_time">เวลาก่อนกิจกรรม</label>
			    <input type="number" class="form-control" id="before_time" name="before_time" value="{{old('before_time',$task->before_time)}}">
			</div>
			<div class="form-group col-sm-2">
			    <label for="after_time">เวลาหลังกิจกรรม:</label>
			    <input type="number" class="form-control" id="after_time" name="after_time" value="{{old('after_time',$task->after_time)}}">
			</div>
			<div class="form-group col-sm-2">
		    	<label for="late_time">เวลาสาย:</label>
		    	<input type="number" class="form-control" id="late_time" name="late_time" value="{{old('late_time',$task->late_time)}}">
			</div>
		</div>

		<div class="form-row">
		  	<div class="form-group  col-sm-2">
			    <label for="job_id">รหัสภาระงาน</label>
			    <input type="text" class="form-control" id="job_id" name="job_id" value="{{old('job_id',$task->job_id)}}">
			</div>
			<div class="form-group col-sm-4">
			    <label for="job_type">ประเภทภาระงาน:</label>
			    <input type="text" class="form-control" id="job_type" name="job_type" value="{{old('job_type',$task->job_type)}}">
			</div>
	  	</div>

	  	<div class="form-row">
			<div class="form-group col-sm-2">
			    <label for="rfid_location">เครื่องทาบบัตร:</label>
			    <select id="rfid_location" class="form-control" id="rfid_location" name="rfid_location">
			    	<option selected>Choose...</option>
			        <option>ห้องวีกิจฯ</option>
			        <option>ห้องจงจินต์ฯ</option>
			        <option>Moblie 1</option>
			    </select>
			</div>
			<div class="form-group col-sm-2">
			    <label for="work_hour">จำนวนชั่วโมงภาระงาน:</label>
			    <input type="text" class="form-control" id="work_hour" name="work_hour" value="{{old('work_hour',$task->work_hour)}}">
			</div>

	  	</div>

	  <button type="submit" class="btn btn-primary">บันทึก</button>
	</form> 


@endsection
