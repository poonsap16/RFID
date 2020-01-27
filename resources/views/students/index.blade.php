@extends('layouts.app')



@section('content')
<div class="col-12">


<div>
    <h3>รายชื่อ</h3>
    
</div>
</br>

<table class="table">
  <thead>
    <tr>
        <th scope="col">รหัส sap</th>

        <th scope="col">ชื่อ-นามสกุล</th>

        <th scope="col">ใบประกอบโรคศิลป์</th>
        <th scope="col">สาขาวิชา</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>    
        <td>{{ $student->sap_id }}</td>
        <td>{{ $student->prefix . $student->name }}</td>
       
        
        <td>{{ $student->doctor_cert }}</td>

        <td>{{ $student->section }}</td>
        <td>{{ $student->year }}</td>

        <td>
          <a class="btn btn-success" role="button" href="{{url('/student/show',$student->id)}}">แก้ไข</a>
        </td>
        </td>
    </tr>
    @endforeach
  </tbody> 
</table>
</div>

<div class="pagination justify-content-center">
  {{ $students->links() }}
</div>
@endsection
