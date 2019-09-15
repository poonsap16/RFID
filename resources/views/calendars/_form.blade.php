
@if(isset($rfid_machine))
    <form action="{{url('/calendar/show',$calendar->id)}}" method="post" enctype="multipart/form-data">
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



	<form class="border border-light p-2" action="/calendar/save" method="post">
	  <!-- <div><h3>เพิ่มกิจกรรม</h3></div>	 -->

	  <input type="hidden" name="_token" value="{{ csrf_token() }}"> </br>
<!-- 	   @if($message = Session::get('success'))
	     <div class="alert alert-success">
	       {{$message}}
	     </div>
	   @endif -->

		<div class="form-row">
		  	<div class="form-group  col-sm-2">
			    <label for="date">วันที่</label>
			    <input type="date" class="form-control" id="date" name="date" value="{{old('date',isset($calendar) ? $calendar->date:'')}}">
			</div>
			<div class="form-group col-sm-4">
			    <label for="task_job_id">กิจกรรม:</label>

				<select class="form-control" id="task_job_id" name="task_job_id">
                  <option value="" hidden select>เลือกกิจกรรม</option>
                  @foreach($tasks as $task)

                      <option value="{{$task['id']}}">{{$task['task_name']}}</option>

                  @endforeach

                </select>

			</div>
	  	</div>

	  <button type="submit" class="btn btn-primary">บันทึก</button>
	</form> 
