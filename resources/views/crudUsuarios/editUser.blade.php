@extends('dashboard')

@section('content')

  <div class="col-sm-12">
  <h2> 
    Editar Usuario
  </h2> 
  
  @include('crudUsuarios.error')

  <!--  FORMULARIO  -->
  {!! Form::model($usu, ['route' => ['usuarios.update', $usu->id], 'method' => 'PUT']) !!}
    
    @include('crudUsuarios.form')

  {!! Form::close() !!}
@stop