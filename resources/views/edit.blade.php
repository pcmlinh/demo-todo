@extends('layout')

@section('content')
    <h1>Edit Task</h1>
    <form method="POST" action={{ route('task.update', ['task' => $task->id]) }}>
        @csrf
        @method('PUT')

        @include('_form')

        <button type="submit" class="btn btn-success btn-lg">Update</button>
    </form>
@endsection