@if(Session::has('info'))
	
	<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{ Session::get('info')}} <b>eliminado</b>
</div>
		
	

@endif