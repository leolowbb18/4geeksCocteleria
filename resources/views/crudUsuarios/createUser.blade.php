@extends('dashboard')

@section('content')

  <div class="col-sm-12">
  <h2> 
    Nuevo Usuario
  </h2> 
 
  @include('crudUsuarios.error')

  {!! Form::open(['route' => 'usuarios.store']) !!}
    
    @include('crudUsuarios.form2')

  {!! Form::close() !!}
@stop