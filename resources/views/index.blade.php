
@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')

<div>
    <a href="{{route('tasks.create')}}">Add task</a>
</div>

    @forelse ($tasks as $task)
    <div>
        <a href="{{ route('tasks.show', ['task' => $task->id]) }}"> {{ $task->title }}</a> 
    </div>
    @empty    
    <div>There are no tasks!</div>
    @endforelse

<button>
    @if ($tasks->count())
    {{$tasks->links()}}
@endif 
</button>


@endsection