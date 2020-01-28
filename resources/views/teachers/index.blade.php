@extends('layouts.app')



@section('content')
<div class="col-12">


<div>
    <h3>รายชื่ออาจารย์</h3>
    
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
    @foreach($teachers as $teacher)
    <tr>    
        <td>{{ $teacher->empid }}</td>
        <td>{{ $teacher->emprankname . $teacher->empname }} &nbsp;&nbsp;{{ $teacher->empsname }}
        </td>
       
        
        <td>{{ $teacher->empcardid }}</td>

        <td>{{ $teacher->section }}</td>

        <td>
          <a class="btn btn-success" role="button" href="{{url('/teacher/show',$teacher->id)}}">แก้ไข</a>
        </td>
        </td>
    </tr>
    @endforeach
  </tbody> 
</table>
</div>

<div class="pagination justify-content-center">
  {{ $teachers->links() }}
</div>
@endsection
