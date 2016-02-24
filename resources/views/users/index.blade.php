@extends('layout')

@section('content')
	<div class="col-md-12">
		@unless ( $users->isEmpty() )
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">All Users</h4>
			</div>
			<ul class="list-group">
			@foreach ($users as $user)
				<li class="list-group-item">
					<a href="/profile/{{ $user->id }}">{{ $user->username }}</a>
					<span class="hidden-xs pull-right">
							<span class="badge">joined @datetime($user->created_at)</span>
							<span class="badge">{{ $user->cards->count() }} cards</span>
							<span class="badge">{{ $user->notes->count() }} notes</span>
					</span>
				</li>
			@endforeach
			</ul>
    @endunless
@stop