@extends('layout')

@section('content')
<div class="row">
	@unless( $user->cards->isEmpty() )
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">{{ $user->username }}'s Cards</h3>
			</div>
			<div class="panel-body">
				<ul class="list-group">
					@foreach ( $user->cards as $card )
						<li class="list-group-item">
							<span class="badge hidden-xs">{{ $card->notes->count() }} notes</span>
							<a href="/cards/{{$card->id }}">{{ $card->title }}</a>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
	@endunless

	@unless( $user->notes->isEmpty() )
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">{{ $user->username }}'s Notes</h3>
			</div>
			<div class="panel-body">
				<ul class="list-group">
					@foreach ( $user->notes as $note )
						<li class="list-group-item">
							<span class="badge hidden-xs"><a href="/cards/{{ $note->card->id }}">{{ $note->card->title }}</a></span>
							<span class="visible-xs"><a href="/cards/{{ $note->card->id }}/#note-{{ $note->id }}">{{ $note->body }}</a></span>
							<span class="hidden-xs">{{ $note->body }}</span>
						</li>
					@endforeach
				</ul>
			</div>
		</div>		
	</div>
	@endunless
</div>
@stop
