@extends('main')

@section('content')
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>

    @if($project->tasks->count())
        @foreach($project->tasks as $task)
            <div>
                <form action="{{ route('task.update', ['task' => $task->id ]) }}" method="post">
                    @method('PATCH')
                    @csrf
                    <label class="checkbox {{ $task->compeleted ? "is-completed" : "" }}" for="compeleted">
                        <input type="checkbox" name="compeleted" id="compeleted" onchange="this.form.submit()" {{ $task->compeleted ? "checked" : "" }} >
                        {{ $task->description }}
                    </label>
                </form>
            </div>
        @endforeach
    @endif
    <a href="{{ route('project.edit', ['project' => $project->id]) }}">Edit</a>
    <form action="{{ route('project.destroy', ['project' => $project->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button>
    </form>

    <div>
        <h2>Add new Task</h2>
        <form action="/project/{{ $project->id }}/task" method="post">
            @csrf
            <label for="description">Description</label>
            <input type="text" name="description" id="description" placeholder="description">

            <input type="submit" value="Add Task">
        </form>
        @include('errors')
    </div>
@endsection
