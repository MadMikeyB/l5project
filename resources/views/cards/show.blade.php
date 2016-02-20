@extends('layout')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h1>{{ $card->title }}</h1>

		<ul class="list-group">
			@foreach ( $card->notes as $note )
				<li class="list-group-item">
					{{ $note->body }}
					<span class="pull-right">
						@if ( $note->user )
						<a href="#">{{ $note->user->username }}</a>
						&#47;
						@endif
						<a href="#edit-note-{{$note->id}}" data-toggle="modal" >Edit Note</a>
					</span>
				</li>
			@endforeach
		</ul>
		<hr>
		
		<h1>Add a New Note</h1>
		
		<form method="post" action="/cards/{{ $card->id }}/notes">
			<div class="form-group">
				<textarea name="body" class="form-control"></textarea>
			</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary pull-right">Add Note</button>
				</div>
		</form>
	</div>
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