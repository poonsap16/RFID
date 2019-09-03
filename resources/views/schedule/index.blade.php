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


<div class="container" align="center">
<div><h2>รายการกิจกรรม</h2></div></br>

<table class="table">
  <thead>
    <tr>
        <th scope="col">ลำดับ</th>
        <th scope="col">รหัสกิจกรรม</th>
        <th scope="col">ชื่อกิจกรรม</th>
        <th scope="col">ชื่อย่อ</th>
        <th scope="col">เวลาเริ่มต้น</th>
        <th scope="col">เวลาสิ้นสุด</th>
        <th scope="col">เวลาก่อนกิจกรรม</th>
        <th scope="col">เวลาหลังกิจกรรม</th>
        <th scope="col">เวลาสาย</th>
        <th scope="col">รหัสภาระงาน</th>
        <th scope="col">ชื่อภาระงาน</th>
        <th scope="col">เครื่องทาบบัตร</th>
        <th scope="col">เวลา</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tasks as $task)
    <tr>    
        <th>{{ $task->id }}</th>
        <th>{{ $task->task_id }}</th>
        <th>{{ $task->task_name }}</th>
        <th>{{ $task->task_Acronym }}</th>
        <th>{{ $task->start_time }}</th>
        <th>{{ $task->end_time }}</th>
        <th>{{ $task->before_time }}</th>
        <th>{{ $task->after_time }}</th>
        <th>{{ $task->late_time }}</th>
        <th>{{ $task->job_id }}</th>
        <th>{{ $task->job_type }}</th>
        <th>{{ $task->rfid_location }}</th>
        <th>{{ $task->work_hour }}</th>
        

    </tr>
    @endforeach
  </tbody> 
</table>
</div>

  </body>
</html>