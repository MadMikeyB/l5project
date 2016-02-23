@extends('layout')

@section('content')
	<div class="col-md-12">
		@unless ( $cards->isEmpty() )
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">All Cards</h4>
			</div>
			<ul class="list-group">
			@foreach ($cards as $card)
				<li class="list-group-item">
					<a href="/cards/{{ $card->id }}">{{ $card->title }}</a>
					<span class="hidden-xs">
						@if ( $card->user )
							added by <a href="/profile/{{ $card->user_id }}">{{ $card->user->username }}</a>
						@endif
							on <span class="badge">@datetime($card->created_at)</span>
					</span>
					{{-- mod tools --}}
					<div class="pull-right hidden-xs">
						@if ( Auth::user()->id === $card->user_id )
							<form action="/cards/{{ $card->id }}/delete" method="post">
								{{ method_field('DELETE') }}
								{{ csrf_field() }}
								<button type="submit" class="btn btn-warning btn-xs">Archive</button>
							</form>
						@endif
					</div>

				</li>
			@endforeach
			</ul>
			<div class="panel-body">
				<form method="post" action="/cards">
					<div class="input-group">
						{{ csrf_field() }}
						<input class="form-control" id="title" name="title" placeholder="Add a card.." type="text" required="required">
						<div class="input-group-btn">
							<button class="btn btn-default"><i class="glyphicon glyphicon-plus"></i> Add Card</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		@else
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">There are no Active Cards!</h4>
				</div>


				<div class="panel-body">
					<form method="post" action="/cards">
						<div class="input-group">
							{{ csrf_field() }}
							<input class="form-control" id="title" name="title" placeholder="Add a card.." type="text">
							<div class="input-group-btn">
								<button class="btn btn-default"><i class="glyphicon glyphicon-plus"></i> Add Card</button>
							</div>

						</div>
					</form>
				</div>
			</div>
    @endunless
@stop