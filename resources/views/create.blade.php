@extends('layout')

@section('content')
    <h1>Create New Task</h1>
    <form method="POST" action={{ route('task.store') }}>
        @csrf

        @include('_form')

        <button type="submit" class="btn btn-success btn-lg">Create Task</button>
    </form>
@endsection