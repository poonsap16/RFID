



    <form action="/calendar/searchs" method="post">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-row">
            <div class="col-12">
                <div class="form-group">
                    <label for="task_id">กิจกรรม:</label>
                    <select class="form-control" id="task_id" name="task_id">
                    <option value="" hidden>เลือกกิจกรรม</option>
                    @foreach($tasks as $task)
                        @if( old('task_id', isset($calendar) ? $calendar->task_id : '') == $task['id'])
                            <option value="{{ ($task['id']) }}" selected>{{ $task['task_name'] }}</option>
                        @else
                            <option value="{{ ($task['id']) }}">{{ $task['task_name'] }}</option>
                        @endif
                    @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">บันทึก</button>
            </div>
        </div>
    </form> 