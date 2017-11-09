<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = \App\Product::orderBy('id', 'DESC')->paginate();
        return view('productos.index', compact('prod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        //return 'producto almacenado';

         $prod = new Product;

        $prod->titulo = $request->titulo;
        $prod->description = $request->description;
        $prod->tipo = $request->tipo;
        $prod->existencia = $request->existencia;
        $prod->precio = $request->precio;
        $prod->img = $request->img;
        $prod->type_id = $request->type_id;

        $prod->save();

        return redirect()->route('products.index')->with('info', 'El producto fue Guardado');

           
           /*
           $validator = Validator::make($request->all(), [
            'titulo' => 'required',
            'description' => 'required',
            'tipo' => 'required', 
            'existencia' => 'required', 
            'precio' => 'required', 
            'img' => 'required'        
        ]);

        if ($validator->fails()) {
            return redirect('producto/create')
                        ->withErrors($validator)
                        ->withInput();
        }else {

            DB::table('productos')->insert(
                 ['titulo' => $request->post('titulo')],
                ['description' => $request->post('titulo')]
            );
        }
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prod = \App\Product::find($id);
        return view('productos.show', compact('prod'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prod = \App\Product::find($id);
        return view('productos.edit', compact('prod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        //return 'producto actualizado'. $id;

        $prod = Product::find($id);

        $prod->titulo = $request->titulo;
        $prod->description = $request->description;
        $prod->tipo = $request->tipo;
        $prod->existencia = $request->existencia;
        $prod->precio = $request->precio;
        $prod->img = $request->img;
        $prod->type_id = $request->type_id;

        $prod->save();

        return redirect()->route('products.index')->with('info', 'El producto fue actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = \App\Product::find($id);
        $prod->delete();

        return back()->with('info', 'El producto ha sido eliminado');
    }
}
   
