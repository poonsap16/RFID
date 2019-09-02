<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>RFID-รายการกิจกรรม</title>
  </head>
  <body>


	<form class="border border-light p-5" action="">
	  <div><h3>เพิ่มรายการกิจกรรม</h3></div>	

		<div class="form-row">
		  	<div class="form-group  col-sm-2">
			    <label for="task_id">รหัสกิจกรรม</label>
			    <input type="text" class="form-control" id="task_id">
			</div>
			<div class="form-group col-sm-4">
			    <label for="task_name">ชื่อกิจกรรม:</label>
			    <input type="text" class="form-control" id="task_name">
			</div>
	  	</div>

		<div class="form-row">
			<div class="form-group col-sm-2">
			   	<label for="start_time">เวลาเริ่มกิจกรรม</label>
				<input type="time" class="form-control" id="start_time">
			</div>
			<div class="form-group col-sm-2">
			    <label for="end_time">เวลาสิ้นสุดกิจกรรม:</label>
			    <input type="time" class="form-control" id="end_time">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-sm-2">
				<label for="start_time">เวลาก่อนกิจกรรม</label>
			    <input type="time" class="form-control" id="start_time">
			</div>
			<div class="form-group col-sm-2">
			    <label for="end_time">เวลาหลังกิจกรรม:</label>
			    <input type="time" class="form-control" id="end_time">
			</div>
			<div class="form-group col-sm-2">
		    	<label for="late_time">เวลาสาย:</label>
		    	<input type="time" class="form-control" id="late_time">
			</div>
		</div>

		<div class="form-row">
		  	<div class="form-group  col-sm-2">
			    <label for="job_id">รหัสภาระงาน</label>
			    <input type="text" class="form-control" id="job_id">
			</div>
			<div class="form-group col-sm-4">
			    <label for="job_type">ประเภทภาระงาน:</label>
			    <input type="text" class="form-control" id="job_type">
			</div>
	  	</div>

	  	<div class="form-row">
	  		<div class="col-sm-2">
			    <div class="custom-control custom-checkbox sm-2">
			        <input type="checkbox" class="custom-control-input" id="person_type">
			        <label class="custom-control-label" for="person_type">อาจารย์แพทย์</label>
			    </div>
			</div>

			<div class="col-sm-2">
			    <div class="custom-control custom-checkbox sm-2">
			        <input type="checkbox" class="custom-control-input" id="person_type">
			        <label class="custom-control-label" for="person_type">Ressident/Fellow</label>
			    </div>
		    </div>
		</div>
		


	  	<div class="form-row">
			<div class="form-group col-sm-2">
			    <label for="rfid_location">เครื่องทาบบัตร:</label>
			    <select id="rfid_location" class="form-control">
			    	<option selected>Choose...</option>
			        <option>ห้องวีกิจฯ</option>
			        <option>ห้องจงจินต์ฯ</option>
			        <option>Moblie 1</option>
			    </select>
			</div>
			<div class="form-group col-sm-2">
			    <label for="work_hour">จำนวนชั่วโมงภาระงาน:</label>
			    <input type="text" class="form-control" id="work_hour">
			</div>

	  	</div>




	  <div class="form-group form-check">
	    <label class="form-check-label">
	      <input class="form-check-input" type="checkbox"> Remember me
	    </label>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

