@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Task List</h2>

    <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Add New Task</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Due Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->due_date }}</td>
                    <td>{{ $task->completed ? 'Completed' : 'Pending' }}</td>
                    <td>
                        <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info btn-sm text-white"><i class="fa-solid fa-eye"></i> View</a>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm text-white"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
