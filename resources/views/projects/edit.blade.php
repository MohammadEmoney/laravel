@extends('main')

@section('content')
    <form action="{{ route('project.update', ['project' => $project->id]) }}" method="post">
        @csrf
        @method('PATCH')
        <label for="title"></label>
        <input type="text" id="title" name="title" value="{{ $project->title }}">
        <label for="description"></label>
        <input type="text" id="description" name="description" value="{{ $project->description }}">
        <input type="submit" value="edit">
    </form>
    @include('errors')
@endsection
