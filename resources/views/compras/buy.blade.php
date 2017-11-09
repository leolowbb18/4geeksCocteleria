@extends('esquema')

@section('content')

  <div class="col-sm-12">
  <h2> 
    Nuevo Producto
  </h2> 
 
  <!-- @include('productos.error') -->

  {!! Form::open(['route' => 'products.store']) !!}
    
    @include('productos.form')

  {!! Form::close() !!}
@stop