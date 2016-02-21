@if ( session()->has('flash_message') )
<div class="alert alert-info">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<p>{{ session()->get('flash_message') }}</p>
</div>
@endif