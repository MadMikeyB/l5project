@if ( session()->has('flash_message') )
<div class="alert alert-info">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Read me!</strong><br>
	{{ session()->get('flash_message') }}
</div>
@endif