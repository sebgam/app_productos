@extends('layout')

@section('title')
	Ver producto
@endsection

@section('content')

<div class="col-sm-8">
	<h3>
		{{ $product->name }}
		<a href="{{ route('products.edit', $product->id)}}" class="btn btn-success pull-right" > Editar</a>

	</h3>
	<p>
		{{ $product->short }}
	</p>
	
	{!! $product->body !!}

<br>
<br>
<a href="{{ route('products.index') }}" class="btn btn-warning"> volver</a>
</div>

<div class="col-sm-4">
	@include('products.fragment.aside')
</div>


@endsection

