@extends('layout.layout')

@section('title')
    Welcome
@endsection

@section('content')
    <h1>Welcome</h1>
    <p>Welcome Page</p>

    <ul>
        @foreach ($tasks as $task)
            <li>{{$task}}</li>
        @endforeach
    </ul>
@endsection