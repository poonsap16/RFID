@extends('layouts.navbar')



@section('content')
@include('schedule._form')

<div class="container">
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
<!--           <a class="btn btn-success" role="button" href="{{url('/tasks',$task->id)}}">รายละเอียด</a>
 -->

        <form action="/schedule/tasks/{{ $task->id }}">
            @csrf
            @method('PACTH')
            <button class="btn btn-success" type="submit">รายละเอียด</button>
        </form>
        </td>
<!--         <td>{{ $task->end_time }}</td> -->
<!--         <td>{{ $task->before_time }}</td>
        <td>{{ $task->after_time }}</td>
        <td>{{ $task->late_time }}</td>
        <td>{{ $task->job_id }}</td>
        <td>{{ $task->job_type }}</td>
        <td>{{ $task->rfid_location }}</td>
        <td>{{ $task->work_hour }}</td> -->
        

    </tr>
    @endforeach
  </tbody> 
</table>
</div>
@endsection
