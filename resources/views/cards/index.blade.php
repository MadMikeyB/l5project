@extends('layout')

@section('content')
<h1>All Cards</h1>
@foreach ($cards as $card)
<p><a href="/cards/{{ $card->id }}">{{ $card->title }}</a></p>
@endforeach


@stop