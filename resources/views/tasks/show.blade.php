@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Task Details</h2>

    <p><strong>Title:</strong> {{ $task->title }}</p>
    <p><strong>Description:</strong> {{ $task->description }}</p>
    <p><strong>Due Date:</strong> {{ $task->due_date }}</p>
    <p><strong>Status:</strong> {{ $task->completed ? 'Completed' : 'Pending' }}</p>

    <a href="{{ route('tasks.index') }}" class="btn btn-secondary"><i class="fa-solid fa-backward-step"></i> Back</a>
</div>
@endsection
