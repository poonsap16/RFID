@extends('layouts.app')

@section('title', 'Edit')

@section('contents')

    <form action="{{url('/schedule/edit',$task->id)}}" method="post" enctype="multipart/form-data">
    	@method('put')
    	@include('schedule._form')

    <!-- <input type="hidden" name="_method" value="PATCH">  -->

    <button type="submit" class="btn btn-primary">Update</button>
	</form>

@include('schedule.index')
@endsection
