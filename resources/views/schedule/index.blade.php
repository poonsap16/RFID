@extends('layouts.navbar')



@section('content')
<div class="col-12">
@include('schedule._form')

<div><h3>รายการกิจกรรม</h3></div></br>

<table class="table">
  <thead>
    <tr>
        <th scope="col">ลำดับ</th>
        <th scope="col">รหัสกิจกรรม</th>
        <th scope="col">ชื่อกิจกรรม</th>
        <th scope="col">ชื่อย่อ</th>
        <th scope="col">ช่วงเวลากิจกรรม</th>
<!--         <th scope="col">เวลาสิ้นสุด</th>
        <th scope="col">เวลาก่อนกิจกรรม</th>
        <th scope="col">เวลาหลังกิจกรรม</th>
        <th scope="col">เวลาสาย</th>
        <th scope="col">รหัสภาระงาน</th>
        <th scope="col">ชื่อภาระงาน</th>
        <th scope="col">เครื่องทาบบัตร</th>
        <th scope="col">เวลา</th> -->
    </tr>
  </thead>
  <tbody>
    @foreach($tasks as $task)
    <tr>    
        <td>{{ $task->id }}</td>
        <td>{{ $task->task_id }}</td>
        <td>{{ $task->task_name }}</td>
        <td>{{ $task->task_Acronym }}</td>
        <td>{{ $task->start_time }} - {{ $task->end_time }}</td>


        <td>
          <a class="btn btn-success" role="button" href="{{url('/schedule/show',$task->id)}}">รายละเอียด</a>
        </td>
        </td>
    </tr>
    @endforeach
  </tbody> 
</table>
</div>
@endsection
