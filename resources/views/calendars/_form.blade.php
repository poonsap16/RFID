
@if($errors->any())
	<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li> {{$error}}</li>
		@endforeach
	</ul>
	</div>
@endif

@if(isset($calendar))
    <form action="{{ url('/calendar',$calendar->id) }}" method="post">
    <input type="hidden" name="_method" value="PATCH"> 
@else
	<form action="/calendar/save" method="post">
@endif
      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	  	
		<div class="form-row">
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="date">วันที่</label>
					<input type="date" class="form-control" id="date" name="date" value="{{ old('date', isset($calendar) ? $calendar->date:'') }}">
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="task_id">กิจกรรม:</label>
					<select class="form-control" id="taskId" name="task_id" onchange="getTaskData()">
					<option value="" hidden>เลือกกิจกรรม</option>
					@foreach($tasks as $task)
						@if( old('task_id', isset($calendar) ? $calendar->task_id : '') == $task['id'])
							<option value="{{ ($task['id']) }}" selected>{{ $task['task_name'] }}</option>
						@else
							<option value="{{ ($task['id']) }}">{{ $task['task_name'] }}</option>
						@endif
					@endforeach
					</select>
				</div>
			</div>
		</div>


		<div class="form-row">
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="start_time">เวลาเริ่มกิจกรรม:</label>
						<input type="time" class="form-control" name="start_time" id="start_time" value="{{ old('start_time', isset($calendar) ? $calendar->start_time:'') }}">
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="end_time">เวลาสิ้นสุดกิจกรรม:</label>
						<input type="time" class="form-control" name="end_time" id="end_time" value="{{ old('start_time', isset($calendar) ? $calendar->end_time:'') }}">
				</div>
			</div>
		</div>

		<div class="form-row">
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="before_time">ก่อนเวลา:</label>
						<input type="time" class="form-control" name="before_time" id="before_time" value="{{ old('start_time', isset($calendar) ? $calendar->before_time:'') }}">
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="after_time">หลังเวลา:</label>
						<input type="time" class="form-control" name="after_time" id="after_time" value="{{ old('start_time', isset($calendar) ? $calendar->after_time:'') }}">
				</div>
			</div>
		</div>

		<div class="form-row">
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="late_time">สายได้:</label>
						<input type="time" class="form-control" name="late_time" id="late_time" value="{{ old('late_time', isset($calendar) ? $calendar->late_time:'') }}">
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="color">สีกิจกรรม:</label>
					<input type="color" name="color" id="color" value="{{ old('color', isset($calendar) ? $calendar->color : '#48C9B0') }}" style="width:100%; height: 35px;">
				</div>
			</div>
		
		</div>
		<div class="form-row">
			<div class="col-12">
				<button type="submit" class="btn btn-primary">บันทึก</button>
			</div>
		</div>
	</form> 
@section('extra-script')
<script>
function getTaskData() {
  let task = document.getElementById("taskId").value;
  axios.get('{{ url("/task") }}', {
    params: {
      taskId: task
    }
  })
  .then(function (response) {
	console.log(response)
	document.getElementById("start_time").value = response.data.start_time;
	document.getElementById("end_time").value = response.data.end_time;
	document.getElementById("before_time").value = response.data.before_time;
	document.getElementById("after_time").value = response.data.after_time;
	document.getElementById("late_time").value = response.data.late_time;
  })
  .catch(function (error) {
    console.log(error);
  })
}
</script>
@endsection