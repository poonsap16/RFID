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
<!-- 
	<form class="border border-light p-3">
	<div class="container">
		<legend>Create</legend>
		<div class="input-group input-group-sm mb-4">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="task_id">รหัสกิจกรรม</span>
		  </div>
		  <input type="text" class="form-control col-4" aria-label="Sizing example input" aria-describedby="task_id">
		</div>

		<div class="input-group input-group-sm mb-4">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="task_name">ชื่อกิจกรรม</span>
		  </div>
		  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="task_name">
		  <div>
		  	<span class="input-group-text" id="task_name">ชื่อย่อกิจกรรม</span>
		  </div>
		  <input type="text" class="form-control  col-4" aria-label="Sizing example input" aria-describedby="task_name">
		</div>

		<div class="input-group input-group-sm mb-4 col-4">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="task_name">ชื่อย่อกิจกรรม</span>
		  </div>
		  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="task_name">
		</div>



	</div>
	</form> -->

	<form class="border border-light p-3" action="">
	  <div class="form-group">
	    <label for="task_id">รหัสกิจกรรม</label>
	    <input type="text" class="form-control" id="task_id">
	  </div>
	  <div class="form-group">
	    <label for="task_name">ชื่อกิจกรรม:</label>
	    <input type="text" class="form-control" id="task_name">
	  </div>
	  <div class="form-group">
	    <label for="start_time">เวลาเริ่มกิจกรรม</label>
	    <input type="time" class="form-control" id="start_time">
	  </div>
	  <div class="form-group">
	    <label for="end_time">เวลาสิ้นสุดกิจกรรม:</label>
	    <input type="time" class="form-control" id="end_time">
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

