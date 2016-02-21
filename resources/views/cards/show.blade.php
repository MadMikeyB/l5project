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
		
		<h1>Add a New Note</h1>
		
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
@stop


@section('footer')
@foreach ( $card->notes as $note )
	<div class="modal fade" id="edit-note-{{$note->id}}">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Edit Note</h4>
				</div>
				<form method="post" action="/notes/{{ $note->id }}">
					{{ csrf_field() }}
					<div class="modal-body">
							{{ method_field('PATCH') }}

							<div class="form-group">
								<textarea name="body" class="form-control">{{ $note->body }}</textarea>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-success pull-right">Update Note</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endforeach
@stop