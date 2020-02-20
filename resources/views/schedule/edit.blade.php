@extends('layouts.app')

@section('content')
    <form action="{{url('/schedule/edit',$task->id)}}" method="post" enctype="multipart/form-data">
        @method('put')
        @include('schedule._form')
        <!-- submit -->
        
        <div class="container">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>

    @include('schedule.index')

@endsection
