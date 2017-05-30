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

        $product = new product;
        $product->name = $request->name;
        $product->short = $request->short;
        $product->body = $request->body;

        $product->save();


        return redirect()->route('products.index')->with('info','El producto ' . $product->name . ' fue guardado exitosamente');

    }
    public function update(ProductRequest $request, $id){

        $product = product::find($id);
        $product->name = $request->name;
        $product->short = $request->short;
        $product->body = $request->body;

        $product->save();


        return redirect()->route('products.index')->with('info','El producto ' . $product->name . ' fue actualizado exitosamente');

    }

    public function show($id){

    	$product = product::find($id); //muestra campo enviado por id desde la vista
    	return view('products.show', compact('product'));
    }

    public function destroy($id){

    	$product = Product::find($id);//busca el campo con el id

    	$product->delete(); //elimina el campo con el id

    	return back()->with('info','El producto con nombre ' . $product->name . ' fue eliminado');

    }

    


}
