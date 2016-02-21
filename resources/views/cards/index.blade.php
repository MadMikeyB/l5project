@extends('layout')

@section('content')
	<div class="col-md-3 col-md-offset-9">
		<a href="/cards/create" type="button" class="btn btn-primary btn-block"><i class="fa fa-plus"></i> Create Card</a>
	</div>
	<div class="col-md-12">
		<h1>All Cards</h1>
		<ul class="list-group">
		@foreach ($cards as $card)
			<li class="list-group-item"><a href="/cards/{{ $card->id }}">{{ $card->title }}</a></li>
		@endforeach
		</ul>
	</div>
@stop