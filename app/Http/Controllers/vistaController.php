<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Type;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;

class vistaController extends Controller
{
    public function destacados()
    {
        $prod = \App\Product::where('tipo', '=' ,'destacado')->paginate();
        return view('productos.destacados', compact('prod'));
    }
    
    public function vistaDinamica($vis)
    {
        $prod = \App\Product::where('type_id', '=' , $vis)->paginate();
        $nom = \App\Type::where('id', '=' , $vis)->get()->first();
        return view('productos.vistaDinamica', compact('prod', 'nom'));
        //return redirect(route('vistaDina', compact('prod', 'nom')));
    }

}
