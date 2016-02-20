@extends('layout')
@section('content')
    <h1>The welcome page</h1>
    @foreach ($people as $person)
        <p>{{ $person }}</p>
    @endforeach
@stop
