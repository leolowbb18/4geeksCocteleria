@extends('dashboard')

@section('content')

  <div class="col-sm-12">
  <h2> 
    Editar producto
  </h2> 
  
  @include('productos.error')
  <img src="{{ $prod->img }}" alt="Smiley face" height="50" width="50">
  <!-- <img src="../../Imagenes/productos/cocteleras/coctelera2.jpg" alt="Smiley face"> -->
  <!-- <h1>{{ $prod->img }}</h1> -->

  <!--  FORMULARIO  -->
  {!! Form::model($prod, ['route' => ['products.update', $prod->id], 'method' => 'PUT']) !!}
    
    @include('productos.form')

  {!! Form::close() !!}
@stop