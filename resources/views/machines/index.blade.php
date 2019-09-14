@extends('layouts.navbar')



@section('content')
<div class="col-12">
@include('machines._form')

<div><h3>รายการกิจกรรม</h3></div></br>

<table class="table">
  <thead>
    <tr>
        <th scope="col">ลำดับ</th>
        <th scope="col">ชื่อเครื่อง</th>
        <th scope="col">ห้อง</th>
        <th scope="col">ตึก</th>
        <th scope="col">ชั้น</th>
    </tr>
  </thead>
  <tbody>
    @foreach($rfid_machines as $rfid_machine)
    <tr>    
        <td>{{ $rfid_machine->id }}</td>
        <td>{{ $rfid_machine->machine_name }}</td>
        <td>{{ $rfid_machine->location }}</td>
        <td>{{ $rfid_machine->building }}</td>
        <td>{{ $rfid_machine->floor }}</td>
        <td>
          <a class="btn btn-success" role="button" href="{{url('/machine/show',$rfid_machine->id)}}">แก้ไข</a>
        </td>
        </td>
    </tr>
    @endforeach
  </tbody> 
</table>
</div>
@endsection
