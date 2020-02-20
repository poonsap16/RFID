<!-- 
@if(isset($task))
    <form action="{{url('/schedule/show',$task->id)}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PATCH"> 
@else
    <form action="save" method="post" enctype="multipart/form-data">
@endif
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> </br>  -->


	   @if($errors->any())
	     <div class="alert alert-danger">
	       <ul>
	         @foreach($errors->all() as $error)
	           <li> {{$error}}</li>
	         @endforeach
	       </ul>
	     </div>
	   @endif



	<!-- <form class="border border-light p-2" action="/schedule/save" method="post"> -->

	  <input type="hidden" name="_token" value="{{ csrf_token() }}"> </br>
	   @if($message = Session::get('success'))
	     <div class="alert alert-success">
	       {{$message}}
	     </div>
	   @endif

	   <div class="container">
		<div class="form-row">
		  	<div class="form-group  col-sm-3">
			    <label for="task_job_id">รหัสกิจกรรม</label>
			    <input type="number" class="form-control" id="task_job_id" name="task_job_id" value="{{old('task_job_id',isset($task) ? $task -> task_job_id:'')}}">
			</div>
			<div class="form-group col-sm-6">
			    <label for="task_name">ชื่อกิจกรรม:</label>
			    <input type="text" class="form-control" id="task_name" name="task_name"
			    value="{{old('task_name',isset($task) ? $task -> task_name:'')}}">
			</div>
			<div class="form-group  col-sm-3">
			    <label for="task_Acronym">ชื่อย่อกิจกรรม</label>
			    <input type="text" class="form-control" id="task_Acronym" name="task_Acronym" value="{{old('task_Acronym',isset($task) ? $task -> task_Acronym:'')}}">
			</div>
	  	</div>

		<div class="form-row">
			<div class="form-group col-sm-2">
			   	<label for="start_time">เวลาเริ่มกิจกรรม : </label>
				<input type="time" class="form-control" id="start_time" name="start_time" value="{{old('start_time',isset($task) ? $task -> start_time:'')}}">
			</div>
			<div class="form-group col-sm-2">
			    <label for="end_time">เวลาสิ้นสุดกิจกรรม :</label>
			    <input type="time" class="form-control" id="end_time" name="end_time" value="{{old('end_time',isset($task) ? $task -> end_time:'')}}">
			</div>
			<div class="form-group col-sm-3">
				<label for="before_time">เวลาก่อนกิจกรรม (ชั่วโมง:นาที)</label>
			    <input type="time" class="form-control" id="before_time" name="before_time" value="{{old('before_time',isset($task) ? $task -> before_time:'')}}">
			</div>
			<div class="form-group col-sm-3">
			    <label for="after_time">เวลาหลังกิจกรรม (ชั่วโมง:นาที)</label>
			    <input type="time" class="form-control" id="after_time" name="after_time" value="{{old('after_time',isset($task) ? $task -> after_time:'')}}">
			</div>
			<div class="form-group col-sm-2">
		    	<label for="late_time">เวลาสาย (ชั่วโมง:นาที)</label>
		    	<input type="time" class="form-control" id="late_time" name="late_time" value="{{old('late_time',isset($task) ? $task -> late_time:'')}}">
			</div>
		</div>

		<div class="form-row">
		  	<div class="form-group  col-sm-3">
			    <label for="job_id">รหัสภาระงาน</label>
			    <input type="text" class="form-control" id="job_id" name="job_id" value="{{old('job_id',isset($task) ? $task -> job_id:'')}}">
			</div>
			<div class="form-group col-sm-4">
			    <label for="job_type">ประเภทภาระงาน:</label>
			    <input type="text" class="form-control" id="job_type" name="job_type" value="{{old('job_type',isset($task) ? $task -> job_type:'')}}">
			</div>
			<div class="form-group col-sm-3">
			    <label for="rfid_machine_id">เครื่องทาบบัตร:</label>

			    <select id="rfid_machine_id" class="form-control" id="rfid_machine_id" name="rfid_machine_id">
			    	<option value="" hidden selected>เลือกเครื่อง...</option>

                  @foreach($rfid_machines as $rfid_machine)
                    @if(old('rfid_machine_id', isset($task) ? $task->rfid_machine_id : '') == $rfid_machine['id'])
                      <option value="{{$rfid_machine['id']}}" selected>{{$rfid_machine['machine_name']}}</option>
                    @else
                      <option value="{{$rfid_machine['id']}}">{{$rfid_machine['machine_name']}}</option>
                    @endif
                  @endforeach
                  	
			    </select>

			    
			</div>
			<div class="form-group col-sm-2">
			    <label for="work_hour">จำนวนชั่วโมงภาระงาน:</label>
			    <input type="text" class="form-control" id="work_hour" name="work_hour" value="{{old('work_hour',isset($task) ? $task -> work_hour:'')}}">
			</div>
	  	</div>
		</div>

	<!-- </form>  -->

@section('extra-script')
<script>
	function setTime (time) {
		flatpickr(time, {
			dateFormat: "H:i",
			defaultDate: time.value === '' ? "00:00" : time.value,
			enableTime: true,
			noCalendar: true,
			time_24hr: true
		})
	}

	setTimeout(() => {
		setTime(document.getElementById("start_time"));
		setTime(document.getElementById("end_time"));
		setTime(document.getElementById("before_time"));
		setTime(document.getElementById("after_time"));
		setTime(document.getElementById("late_time"));
	}, 100);
</script>
@endsection