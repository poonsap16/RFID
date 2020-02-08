@extends('layouts.app')

@section('content')

<form class="my-4" action="/tasks" method="POST">
    @include('schedule._form')
    <!-- submit -->
    <button type="submit" class="btn btn-primary">Create</button>
</form>

<!-- @include('schedule.index') -->

@endsection
