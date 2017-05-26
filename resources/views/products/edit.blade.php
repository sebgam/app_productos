@extends('layout')

@section('title')
	Ver producto
@endsection

@section('content')

<div class="col-sm-8">
	<h3>
		Editar producto
		<a href="{{ route('products.index')}}" class="btn btn-success pull-right" > inicio</a>

	</h3>
	

	{!! Form::model($product, ['route' => ['products.update', $product->id], 'method' =>'PUT' ]) !!}

	@include('products.fragment.form')


	{!! Form::close() !!}







</div>

<div class="col-sm-4">
	@include('products.fragment.aside')
</div>


@endsection
