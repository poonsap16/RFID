@extends('layouts.navbar')



@section('content')
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
@endsection
