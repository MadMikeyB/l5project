@extends('layout')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h1>{{ $card->title }}</h1>

		<ul class="list-group">
			@foreach ( $card->notes as $note )
				<li class="list-group-item">
					{{ $note->body }}
					<a href='#edit-note-{{$note->id}}' class="pull-right" data-toggle="modal" >Edit Note</a>
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
<div class="modal fade" id="edit-note-{{$note->id}}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Edit Note</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="/notes/{{ $note->id }}">
					{{ method_field('PATCH') }}

					<div class="form-group">
						<textarea name="body" class="form-control">{{ $note->body }}</textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-success pull-right">Update Note</button>
			</div>
		</div>
	</div>
</div>
@stop