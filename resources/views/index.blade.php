
@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
<!-- <h1>The list of tasks</h1>

<div> -->
    <!-- @if(count($tasks)) -->
    @forelse ($tasks as $task)
    <div>
        <a href="{{ route('tasks.show', ['task' => $task->id]) }}"> {{ $task->title }}</a> 
    </div>
    @empty    
    <div>There are no tasks!</div>
    @endforelse
    <!-- @else
    <div>There are no tasks!</div> -->
    <!-- @endif -->
<!-- </div>  -->
@endsection