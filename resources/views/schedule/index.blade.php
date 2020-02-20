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
            <!-- <a class="btn btn-success" role="button" href="{{url('/schedule/edit',$task->id)}}">แก้ไข</a> -->
            
            <a
                    class="btn btn-sm btn-success"
                    href="/schedule/edit/{{ $task->id }}"
                >แก้ไข</a>
                <form id="check-complate-{{ $task->id }}" action="/schedule/edit/{{$task->id}}" method="POST" style="display: none;">
                    @csrf
                    @method('patch')
                    <input type="hidden" name="status" value="1">
                </form>
            
            
            <form id="delete-{{ $task->id }}" action="/schedule/edit/{{$task->id}}" method="POST" style="display: none;">
                    @csrf
                    @method('delete')
                </form>
                <button
                    class="btn btn-sm btn-danger"
                    onclick="document.getElementById('delete-{{ $task->id }}').submit()"
                >ลบ</button>
                
          
          </td>
          </td>
      </tr>
      @endforeach
    </tbody> 
  </table>

</div> 
