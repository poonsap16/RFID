
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
			<div class="col-12">
				<div class="form-group">
					
                    <label for="task_id">กิจกรรม:</label>
                    <select class="form-control" id="task_id" name="task_id">
                    <option value="{{ old('task_id', isset($tasks) ? $tasks->task_id:'') }}">{{ $tasks['task_name'] }}</option>



                    </select>
				</div>
			</div>
		</div>


		<div class="form-row">
			<div class="col-12">
				<div class="form-group">
					<label for="date">วันที่</label>
					<input type="date" class="form-control" id="date" name="date" value="{{ old('date', isset($calendar) ? $calendar->date:'') }}">
				</div>
			</div>
		</div>



		<div class="form-row">
			<div class="col-12">
				<div class="form-group">
					<label for="start_time">เวลาเริ่มกิจกรรม:</label>
						<input type="time" class="form-control" name="start_time" id="start_time" value="{{ old('start_time', isset($tasks) ? $tasks->start_time:'') }}">
				</div>
			</div>
		</div>		
		<div class="form-row">
			<div class="col-12">
				<div class="form-group">
					<label for="end_time">เวลาสิ้นสุดกิจกรรม:</label>
						<input type="time" class="form-control" name="end_time" id="end_time" value="{{ old('start_time', isset($tasks) ? $tasks->end_time:'') }}">
				</div>
			</div>
		</div>

		<div class="form-row">
			<div class="col-12">
				<div class="form-group">
					<label for="color">สี:</label>
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