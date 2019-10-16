@extends('layouts.navbar')



@section('content')
<div class="col-12 mx-auto">
@include('calendars._form')

<!-- <div><h3>รายการกิจกรรม</h3></div></br> -->
@include('calendars.calendar')
<!-- <table class="table">
  <thead>
    <tr>
        <th scope="col">ลำดับ</th>
        <th scope="col">วันที่</th>
        <th scope="col">กิจกรรม</th>
    </tr>
  </thead>
  <tbody>
    @foreach($calendars as $calendar)
    <tr>    
        <td>{{ $calendar->id }}</td>
        <td>{{ $calendar->date }}</td>
        <td>{{ $calendar->task->task_name }}</td>
        <td>
          <a class="btn btn-success" role="button" href="{{url('/calendar/show',$calendar->id)}}">แก้ไข</a>
        </td>
        </td>
    </tr>
    @endforeach
  </tbody> 
</table> -->
</div>
@endsection
