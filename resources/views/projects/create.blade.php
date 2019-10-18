@extends('main')

@section('content')
    <form action="{{ route('project.store') }}" method="post">
        @csrf
        <label for="title"></label>
        <input type="text" id="title" name="title" placeholder="title">
        <label for="description"></label>
        <input type="text" id="description" name="description" placeholder="description">
        <input type="submit" value="Submit">
    </form>
    @include('errors')
@endsection
