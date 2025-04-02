@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Task</h2>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $task->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="due_date" class="form-label">Due Date</label>
            <input type="date" class="form-control" id="due_date" name="due_date" value="{{ $task->due_date }}">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="completed" name="completed" {{ $task->completed ? 'checked' : '' }}>
            <label for="completed" class="form-check-label">Completed</label>
        </div>

        <button type="submit" class="btn btn-success">Update Task</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
