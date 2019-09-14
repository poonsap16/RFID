@extends('layouts.navbar')



@section('content')

	<form class="border border-light p-5" action="save" method="post">
	  <div><h3>กิจกรรม</h3></div>	

	  <input type="hidden" name="_token" value="{{ csrf_token() }}"> </br>
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
			    <label for="date">วันที่</label>
			    <input type="date" class="form-control" id="date" name="date">
			</div>
			<div class="form-group col-sm-4">
			    <label for="task_id">กิจกรรม:</label>
				<select class="form-control" id="task_id" name="task_id">
                  <option value="" hidden select>เลือกกิจกรรม</option>
                  @foreach($tasks as $task)

                      <option value="{{$task['task_id']}}">{{$task['task_name']}}</option>

                  @endforeach

                </select>

			</div>
	  	</div>

	  <button type="submit" class="btn btn-primary">บันทึก</button>
	</form> 


@endsection
