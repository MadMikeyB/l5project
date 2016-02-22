@extends('layout')

@section('content')
	<div class="col-md-12">
		<h1>{{ $card->title }}</h1>

		<ul class="list-group">
			@foreach ( $card->notes as $note )
				<li class="list-group-item">
					{{ $note->body }}
					<div class="pull-right">
						@if ( $note->user )
						<a href="#">{{ $note->user->username }}</a>
						@endif
						@if (Auth::user()->id == $note->user->id )
						&#47;
						{{-- data-remote="false" will be removed in Bootstrap 4 --}}
						<a data-target="#edit-note-{{$note->id}}" data-remote="false" href="/notes/{{$note->id}}/edit" data-toggle="modal" class="btn btn-primary btn-xs">Edit Note</a>
						@endif
						<span class="badge badge-blue">@datetime($note->created_at)</span>
					</div>
				</li>
			@endforeach
		</ul>
		<hr>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Add a New Note</h4>
			</div>
			<div class="panel-body">
				<form method="post" action="/cards/{{ $card->id }}/notes">
					{{ csrf_field() }}
					<div class="form-group">
						<textarea name="body" class="form-control" required></textarea>
					</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary pull-right">Add Note</button>
						</div>
				</form>
			</div>
		</div>

	</div>
@stop

@section('footer')
<div class="modal fade" id="create-card">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>

				<h4 class="modal-title"><i class="fa fa-plus"></i> New Card</h4>
			</div>


			<form action="/cards" method="post">
				{{ csrf_field() }}

				<div class="modal-body">
					<div class="form-group">
						<textarea class="form-control" id="title" name="title" placeholder=
						"Card Title" required=""></textarea>
					</div>
				</div>


				<div class="modal-footer">
					<button class="btn btn-danger pull-left" data-dismiss="modal" type="button">Cancel</button> <button class="btn btn-success pull-right" type="submit">Create Card</button>
				</div>
			</form>
		</div>
	</div>
</div>
@foreach ( $card->notes as $note )

<div class="modal fade" id="edit-note-{{$note->id}}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>

				<h4 class="modal-title">Edit Note</h4>
			</div>


			<form action="/notes/{{ $note->id }}" method="post">
				{{ csrf_field() }}

				<div class="modal-body">
					{{ method_field('PATCH') }}

					<div class="form-group">
						<textarea class="form-control" name="body">{{ $note->body }}</textarea>
					</div>
				</div>


				<div class="modal-footer">
					<button class="btn btn-danger pull-left" data-dismiss="modal" type="button">Cancel</button> <button class="btn btn-success pull-right" type="submit">Update Note</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endforeach 
@stop