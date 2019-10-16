
@if($errors->any())
	<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li> {{$error}}</li>
		@endforeach
	</ul>
	</div>
@endif

@if(isset($rfid_machine))
    <form action="{{url('/calendar/show',$calendar->id)}}" method="post">
    <input type="hidden" name="_method" value="PATCH"> 
@else
	<form action="/calendar/save" method="post">
@endif
      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-row">
			<div class="col-12">
				<div class="form-group">
					<label for="date">วันที่</label>
					<input type="date" class="form-control" id="date" name="date" value="{{old('date',isset($calendar) ? $calendar->date:'')}}">
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="col-12">
				<div class="form-group">
					<label for="task_job_id">กิจกรรม:</label>
					<select class="form-control" id="task_job_id" name="task_job_id">
					<option value="" hidden select>เลือกกิจกรรม</option>
					@foreach($tasks as $task)
						<option value="{{ $task['id'] }}">{{ $task['task_name'] }}</option>
					@endforeach
					</select>
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="col-12">
				<div class="form-group">
					<label for="task_job_id">สี:</label>
					<input type="color" name="color" id="color" value="#48C9B0" style="width:100%; height: 35px;">
				</div>
			</div>
		
		</div>
		<div class="form-row">
			<div class="col-12">
				<button type="submit" class="btn btn-primary">บันทึก</button>
			</div>
		</div>
	</form> 
