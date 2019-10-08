
@extends('layouts.navbar')

<script>
      function demo() {
        $('.datepicker').datepicker();
      }

</script>

@section('content')
<div id="example_html">
              <label>default(en)</label>
              <input class="input-medium" type="text" data-provide="datepicker">
 
              <label>th</label>
              <input class="input-medium" type="text" data-provide="datepicker" data-date-language="th">
 
              <label>th-th</label>
              <input class="input-medium" type="text" data-provide="datepicker" data-date-language="th-th">
 
              <label>inline en-th</label>
              <div class="datepicker" data-date-language="en-th"></div>
          </div>

@endsection