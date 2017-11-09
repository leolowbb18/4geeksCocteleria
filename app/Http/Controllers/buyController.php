<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Head;
use App\Body;
use App\Payment;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\HeadRequest;
use App\Http\Requests\BodyRequest;

/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;

*/

class buyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
        //('buy', 'buyController')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        /*
        $prod = new Head;

        $prod->id_user = 1;
        $prod->id_user = 1;

        $prod->save();

        $i = \App\Head::orderBy('id', 'DESC')->first();
        $prod2 = Product::find($id);
        
        $bod = new Body;

        $bod->id_factura = $i;
        $bod->id_producto = $prod2->id;
        $bod->cantidad = $request->cantidad;
        $bod->precio = $request->existencia;
        $a = $request->cantidad;
        $b = $request->existencia;
        $d = $a*$b; 
        $bod->total_linea = $d;

        $bod->save();       
        */
        return redirect()->route('products.destacados')->with('info', 'Usted a adquirido un nuevo producto esperamos lo disfrute');
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
        return view('productos.showT', compact('prod'));

    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
