<div class="form-group">
	{!!Form::label('name', 'nombre del producto') !!}
	{!!Form::text('name', null,['class'=>'form-control'])  !!}

</div>

<div class="form-group">
	{!!Form::label('short', 'descripcion breve del producto') !!}
	{!!Form::text('short', null,['class'=>'form-control'])  !!}
	
</div>

<div class="form-group">
	{!!Form::label('body', 'descripcion del producto') !!}
	{!!Form::textarea('body', null,['class'=>'form-control'])  !!}
	
</div>

<div class="form-group">
	
	{!!Form::submit('ENVIAR',['class'=>'btn btn-primary'])  !!}
	
</div>