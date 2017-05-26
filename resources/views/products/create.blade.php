@extends('layout')

@section('title')
	Ver producto
@endsection

@section('content')

<div class="col-sm-8">
	<h3>
		Nuevo producto
		<a href="{{ route('products.index')}}" class="btn btn-success pull-right" > inicio</a>

	</h3>
	

{!! Form::open(['route' => 'products.store']) !!}

	@include('products.fragment.form')


	{!! Form::close() !!}










</div>

<div class="col-sm-4">
	@include('products.fragment.aside')
</div>


@endsection
