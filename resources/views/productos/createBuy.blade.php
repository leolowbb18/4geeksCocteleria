@extends('esquema')

@section('content')

  <div class="col-sm-11">
    <table class="table table-hover table-stripded">
      <tr>
        <td>
          <img src="{{ $prod->img }}" alt="Smiley face" height="70" width="70"> 
        </td>
      </tr>
      <tr>
        <td><h2>Nombre producto</h2></td>
      </tr>
      <tr>
        <td>{{ $prod->titulo }}</td>
      </tr>
      <td><h2>Descripcion</h2></td>
      </tr>
      <tr>
        <td>{{ $prod->description }}</td>
      </tr>
      <td><h2>Precio</h2></td>
      </tr>
      <tr>
        <td>{{ $prod->precio }}</td>
      </tr>
      <tr>
        <td>
          @include('productos.error')

          {!! Form::open(['route' => 'buy.store']) !!}
    
          @include('productos.formBuy')

          {!! Form::close() !!}
        </td>
      </tr>
     
  </table> 
  </div>
  <div class="col-sm-1">
  </div>
@stop