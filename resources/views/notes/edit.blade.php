@extends('layout')

@section('content')
	<h1>Edit the Note</h1>

		<form method="post" action="/notes/{{ $note->id }}">
			{{ method_field('PATCH') }}
			{{ csrf_field() }}
			<div class="form-group">
				<textarea name="body" class="form-control">{{ $note->body }}</textarea>
			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary pull-right">Update Note</button>
			</div>
		</form>

@stop