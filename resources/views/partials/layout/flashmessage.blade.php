@if ( session()->has('flash_message') )
@if ( session()->has('message_type') )
	{ $class = session()->get('message_type') }
@else
	{ $class = 'success' }
@endif

<div class="alert alert-{{$class}}">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>{{ ucwords($class) }}</strong><br>
	{{ session()->get('flash_message') }}
</div>
@endif