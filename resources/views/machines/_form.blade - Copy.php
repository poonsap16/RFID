
@if(isset($rfid_machine))
    <form action="{{url('/machine/edit',$rfid_machine->id)}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PATCH"> 
@else
    <form action="save" method="post" enctype="multipart/form-data">
@endif
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> </br> 


	   	@if($errors->any())
	    <div class="alert alert-danger">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
  			</button>
  			<h3>เกิดข้อผิดพลาด</h3>
	       	<ul>
	        	@foreach($errors->all() as $error)
	           		<li> {{$error}}</li>
	         	@endforeach
	       	</ul>
	    </div>
	   	@endif



	<form class="border border-light p-2" action="/machine/save" method="post">
	  <input type="hidden" name="_token" value="{{ csrf_token() }}"> </br>
<!-- 	   @if($message = Session::get('success'))
	     <div class="alert alert-success">
	       {{$message}}
	     </div>
	   @endif -->

		<div class="form-row">
		  	<div class="form-group  col-sm-2">
			    <label for="machine_name">ชื่อเครื่อง</label>
			    <input type="text" class="form-control" id="machine_name" name="machine_name" value="{{old('machine_name',isset($rfid_machine) ? $rfid_machine -> machine_name:'')}}">
			</div>
			<div class="form-group col-sm-4">
			    <label for="location">ห้อง:</label>
			    <input type="text" class="form-control" id="location" name="location" value="{{old('machine_name',isset($rfid_machine) ? $rfid_machine -> location:'')}}">
			</div>
	  	</div>

	  	<div class="form-row">
		  	<div class="form-group  col-sm-2">
			    <label for="building">ตึก</label>
			    <input type="text" class="form-control" id="building" name="building" value="{{old('machine_name',isset($rfid_machine) ? $rfid_machine -> building:'')}}">
			</div>
		  	<div class="form-group  col-sm-2">
			    <label for="floor">ชั้น</label>
			    <input type="number" max="30" min="1"class="form-control" id="floor" name="floor" value="{{old('machine_name',isset($rfid_machine) ? $rfid_machine -> floor:'')}}">
			</div>
	  	</div>
		


	</form> 
