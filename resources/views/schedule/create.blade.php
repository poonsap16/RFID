@extends('layouts.app')

@section('content')
    <form class="my-4" action="/schedule/save" method="POST">
        @include('schedule._form')
        <!-- submit -->
        
        <div class="container">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>

    @include('schedule.index')

@endsection

