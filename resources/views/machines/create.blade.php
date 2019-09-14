@extends('layouts.navbar')



@section('content')

	<form class="border border-light p-5" action="save" method="post">
	  <div><h3>เครื่องทาบบัตร</h3></div>	

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
			    <label for="machine_name">ชื่อเครื่อง</label>
			    <input type="text" class="form-control" id="machine_name" name="machine_name">
			</div>
			<div class="form-group col-sm-4">
			    <label for="location">ห้อง:</label>
			    <input type="text" class="form-control" id="location" name="location">
			</div>
	  	</div>

	  	<div class="form-row">
		  	<div class="form-group  col-sm-2">
			    <label for="building">ตึก</label>
			    <input type="text" class="form-control" id="building" name="building">
			</div>
		  	<div class="form-group  col-sm-2">
			    <label for="floor">ชั้น</label>
			    <input type="number" max="10" min="1"class="form-control" id="floor" name="floor">
			</div>
	  	</div>

		
	  	
	  <button type="submit" class="btn btn-primary">บันทึก</button>
	</form> 


@endsection
