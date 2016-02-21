@extends('layout')

@section('content')
	<div class="col-md-12">
		<h1>All Cards</h1>
		<ul class="list-group">
		@foreach ($cards as $card)
			<li class="list-group-item">
				<a href="/cards/{{ $card->id }}">{{ $card->title }}</a>
				<div class="pull-right">
					@if ( $card->user )
						by <a href="#">{{ $card->user->username }}</a>
					@endif
					on <span class="badge">@datetime($card->created_at)</span>
				</div>
			</li>
		@endforeach
		</ul>
	</div>
@stop