@if (session()->has('flash_message'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Success!</strong><br>
	{{ session()->get('flash_message') }}
</div>
@endif