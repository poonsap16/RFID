
@if(isset($teacher))
    <form action="{{url('/teacher/show',$teacher->id)}}" method="post" enctype="multipart/form-data">
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

	  <input type="hidden" name="_token" value="{{ csrf_token() }}"> </br>

		<div class="form-row">
		  	<div class="form-group  col-sm-2">
			    <label for="emp_id">รหัสกิจกรรม</label>
			    <input type="number" class="form-control" id="emp_id" name="emp_id" value="{{old('emp_id',isset($teacher) ? $teacher -> emp_id:'')}}">
			</div>

	  	</div>


	  	


	  <button type="submit" class="btn btn-primary">บันทึก</button>
	</form> 
