@extends('layout')

@section('content')
<h1>To-do List</h1>
<a href="{{ route('task.create') }}">
    <button type="button" class="btn btn-success btn-lg mb-3">Create Task</button>
</a>
<ul class="list-group">
    {{-- <li class="list-group-item">To-do List</li> --}}
    {{-- <li class="list-group-item list-group-item-primary d-flex justify-content-between">
        <span>
            A simple primary list groupitem
        </span>
        <span>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
        </span>
    </li>
    <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
    <li class="list-group-item list-group-item-success">A simple success list group item</li>
    <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
    <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
    <li class="list-group-item list-group-item-info">A simple info list group item</li>
    <li class="list-group-item list-group-item-light">A simple light list group item</li>
    <li class="list-group-item list-group-item-dark">A simple dark list group item</li> --}}
    @forelse ($tasks as $task)
    <li class="list-group-item list-group-item-light d-flex justify-content-between">
        <div>
            <h5>{{ $task->title }}</h5>
            <div>{{ $task->description }}</div>
        </div>
        <div class="d-flex">
            <a href={{ route('task.edit', ['task' => $task->id]) }}>
                <button type="button" class="btn btn-primary mr-1">Edit</button>
            </a>
            <form action="{{ route('task.destroy', ['task' => $task->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </li>
    @empty
    <li class="list-group-item list-group-item-light">No tasks yet!</li>
    @endforelse
</ul>
@endsection