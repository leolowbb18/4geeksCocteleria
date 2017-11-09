@extends('dashboard')

@section('content')

  <div class="col-sm-12">
  <h2> 
    Nuevo Producto
    <a href="{{ route('products.index') }}" class="btn btn-default pull-right">editar</a>
  </h2> 
 
  @include('productos.error')

  {!! Form::open(['route' => 'products.store']) !!}
    
    @include('productos.form')

  {!! Form::close() !!}
@stop