<div class="container">

  <div class="row justify-content-md-center">
      <h3>รายการกิจกรรม</h3>
  </div>

  <table class="table table-hover">
    <thead class="thead-light">
      <tr>
          <th scope="col">ลำดับ</th>
          <th scope="col">รหัสกิจกรรม</th>
          <th scope="col">ชื่อกิจกรรม</th>
          <th scope="col">ชื่อย่อ</th>
          <th scope="col">ช่วงเวลากิจกรรม</th>
          <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($tasks as $task)
      <tr>    
          <td>{{ $task->id }}</td>
          <td>{{ $task->task_job_id }}</td>
          <td>{{ $task->task_name }}</td>
          <td>{{ $task->task_Acronym }}</td>
          <td>{{ $task->start_time }} - {{ $task->end_time }}</td>
          <td>
            <a class="btn btn-success" role="button" href="{{url('/schedule/edit',$task->id)}}">แก้ไข</a>
          </td>
          </td>
      </tr>
      @endforeach
    </tbody> 
  </table>

</div> 
