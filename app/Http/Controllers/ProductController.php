<?php

namespace desaroolloG\Http\Controllers;

use Illuminate\Http\Request;
use desaroolloG\product;
use desaroolloG\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index(){

    	$products = product::orderBy('id','DESC')->paginate(); //consulta y ordena productos de base de datos

    	return view('products.index',compact('products'));
    }

    public function edit($id){
        $product = product::find($id); //muestra campo enviado por id desde la vista
        return view('products.edit', compact('product'));
    }

    public function create(){

        return view('products.create');
    }

    public function store(ProductRequest $request){

        return 'producto guardado';

    }
    public function update(ProductRequest $request, $id){

        return 'producto guardado ' . $id;

    }

    public function show($id){

    	$product = product::find($id); //muestra campo enviado por id desde la vista
    	return view('products.show', compact('product'));
    }

    public function destroy($id){

    	$product = Product::find($id);//busca el campo con el id

    	$product->delete(); //elimina el campo con el id

    	return back()->with('info','El producto con nombre ' . $product->name . ' fue ');

    }

    


}
