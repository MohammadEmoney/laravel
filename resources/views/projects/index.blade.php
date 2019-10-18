@extends('main')

@section('content')
    <h1>Projects</h1>
    <p><a href="{{ route('project.create') }}">Add +</a></p>
    @foreach($projects as $project)
        <a href="{{ route('project.show', ['project' => $project->id]) }}"><li>{{ $project->title }}</li></a>
    @endforeach
@endsection
