@extends('layouts.app')



@section('content')
<div class="col-12 mx-auto mt-3">
  <p>
    @if (!isset($calendar))
    <a class="btn btn-outline-secondary" data-toggle="collapse" href="#calendar_form" role="button" aria-expanded="false" aria-controls="calendar_form">
      เพิ่มกิจกรรม
    </a>
    @endif
  </p>
  <div class="{{ isset($calendar) || $errors->any() ? '' : 'collapse'}} mb-2" id="calendar_form">
    <div class="card card-body">
      @include('calendars._form')
    </div>
  </div>
<!-- <div><h3>รายการกิจกรรม</h3></div></br> -->
@include('calendars.calendar')
</div>
@endsection
