@extends('layout')

@section('content')
	<div class="col-md-12">
		<h1>All Cards</h1>
		<div class="panel panel-default">
		@if ( !empty($cards) )
			<ul class="list-group">
			@foreach ($cards as $card)
				<li class="list-group-item">
					<a href="/cards/{{ $card->id }}">{{ $card->title }}</a>
					<div class="pull-right hidden-xs">
						@if ( $card->user )
							by <a href="#">{{ $card->user->username }}</a>
						@endif
							on <span class="badge">@datetime($card->created_at)</span>
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
						<input class="form-control" id="title" name="title" placeholder="Add a card.." type="text">
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
					<h4>There are no Active Cards!</h4>
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
    @endif
	</div>
@stop