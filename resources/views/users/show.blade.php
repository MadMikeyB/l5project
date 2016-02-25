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

<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">{{ $user->username }}'s Wall</h3>
	</div>
	
	<div class="panel-body">
		@unless ( $user->usernotes->isEmpty() )
		@foreach ($user->usernotes as $note)
		<li class="list-group-item">
			<span class="badge hidden-xs"><a href="/profile/{{ $note->author->id }}">{{ $note->author->username }}</a></span>
			<span class="visible-xs">@datetime($note->created_at)</span>
			<span class="hidden-xs">{{ $note->body }}</span>
		</li>
		@endforeach
		@else
			<p>Nobody &hearts; {{ $user->username }} :( </p>
		@endunless
	</div>
	<div class="panel-footer">
		<form method="post" action="/profile/{{$user->id}}">
			<div class="input-group">
				{{ csrf_field() }}
				<input class="form-control" id="body" name="body" placeholder="Leave a message for {{ $user->username }}" type="text">
				<div class="input-group-btn">
					<button class="btn btn-default"><i class="glyphicon glyphicon-plus"></i> Add Message</button>
				</div>
			</div>
		</form>
	</div>
</div>
@stop
