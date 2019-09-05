
@if(isset($task))
    <form action="{{url('/shedule/show',$task->id)}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PATCH"> 
@else
    <form action="save" method="post" enctype="multipart/form-data">
@endif
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> </br> 


	   @if($errors->any())
	     <div class="alert alert-danger">
	       <ul>
	         @foreach($errors->all() as $error)
	           <li> {{$error}}</li>
	         @endforeach
	       </ul>
	     </div>
	   @endif



	<form class="border border-light p-2" action="/schedule/save" method="post">
	  <!-- <div><h3>เพิ่มกิจกรรม</h3></div>	 -->

	  <input type="hidden" name="_token" value="{{ csrf_token() }}"> </br>
<!-- 	   @if($message = Session::get('success'))
	     <div class="alert alert-success">
	       {{$message}}
	     </div>
	   @endif -->


		<div class="form-row">
		  	<div class="form-group  col-sm-2">
			    <label for="task_id">รหัสกิจกรรม</label>
			    <input type="number" class="form-control" id="task_id" name="task_id" value="{{old('task_id',isset($task) ? $task -> task_id:'')}}">
			</div>
			<div class="form-group col-sm-6">
			    <label for="task_name">ชื่อกิจกรรม:</label>
			    <input type="text" class="form-control" id="task_name" name="task_name"
			    value="{{old('task_name',isset($task) ? $task -> task_name:'')}}">
			</div>
			<div class="form-group  col-sm-2">
			    <label for="task_Acronym">ชื่อย่อกิจกรรม</label>
			    <input type="text" class="form-control" id="task_Acronym" name="task_Acronym" value="{{old('task_Acronym',isset($task) ? $task -> task_Acronym:'')}}">
			</div>
	  	</div>

		<div class="form-row">
			<div class="form-group col-sm-2">
			   	<label for="start_time">เวลาเริ่มกิจกรรม</label>
				<input type="time" class="form-control" id="start_time" name="start_time" value="{{old('start_time',isset($task) ? $task -> start_time:'')}}">
			</div>
			<div class="form-group col-sm-2">
			    <label for="end_time">เวลาสิ้นสุดกิจกรรม:</label>
			    <input type="time" class="form-control" id="end_time" name="end_time" value="{{old('end_time',isset($task) ? $task -> end_time:'')}}">
			</div>
			<div class="form-group col-sm-2">
				<label for="before_time">เวลาก่อนกิจกรรม</label>
			    <input type="number" class="form-control" id="before_time" name="before_time" value="{{old('before_time',isset($task) ? $task -> before_time:'')}}">
			</div>
			<div class="form-group col-sm-2">
			    <label for="after_time">เวลาหลังกิจกรรม:</label>
			    <input type="number" class="form-control" id="after_time" name="after_time" value="{{old('after_time',isset($task) ? $task -> after_time:'')}}">
			</div>
			<div class="form-group col-sm-2">
		    	<label for="late_time">เวลาสาย:</label>
		    	<input type="number" class="form-control" id="late_time" name="late_time" value="{{old('late_time',isset($task) ? $task -> late_time:'')}}">
			</div>
		</div>

		<div class="form-row">
		  	<div class="form-group  col-sm-2">
			    <label for="job_id">รหัสภาระงาน</label>
			    <input type="text" class="form-control" id="job_id" name="job_id" value="{{old('job_id',isset($task) ? $task -> job_id:'')}}">
			</div>
			<div class="form-group col-sm-4">
			    <label for="job_type">ประเภทภาระงาน:</label>
			    <input type="text" class="form-control" id="job_type" name="job_type" value="{{old('job_type',isset($task) ? $task -> job_type:'')}}">
			</div>
			<div class="form-group col-sm-2">
			    <label for="rfid_location">เครื่องทาบบัตร:</label>
			    <select id="rfid_location" class="form-control" id="rfid_location" name="rfid_location">
			    	{{--<option>{{ $task->rfid_location }}</option>--}}
			    	
			    	@if(old($task->rfid_location, isset($task) ? $task->rfid_location : '')
			    		<option value="" hidden select>เลือกเครื่องทาบบัตร</option>
			    		<option value="1" >ห้องวีกิจฯ</option>
			    		<option value="2" >ห้องจงจินต์</option>
			    	@else
			    		<option>{{ $task->rfid_location }}</option>
			    	@endif

			    </select>
			</div>
			<div class="form-group col-sm-2">
			    <label for="work_hour">จำนวนชั่วโมงภาระงาน:</label>
			    <input type="text" class="form-control" id="work_hour" name="work_hour" value="{{old('work_hour',isset($task) ? $task -> work_hour:'')}}">
			</div>
	  	</div>

	  	


	  <button type="submit" class="btn btn-primary">บันทึก</button>
	</form> 