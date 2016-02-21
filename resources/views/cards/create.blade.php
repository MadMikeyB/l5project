@extends('layout')

@section('content')

<h1>Create New Card</h1>

<form action="/cards" method="POST" role="form">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="title">Card Title</label>
		<input type="text" class="form-control" id="title" name="title" placeholder="Card Title" required>
	</div>

	<button type="submit" class="btn btn-primary pull-right">Submit</button>
</form>

@stop