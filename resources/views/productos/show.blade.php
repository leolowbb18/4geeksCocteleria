@extends('dashboard')

@section('content')

  <div class="col-xm-12">
  <table class="tableShow table-hover table-stripded">
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
        <a href="{{ route('products.index') }}" class="btn clase2 btn-group">Regresar</a>
      </tr>       
  </table> 
@stop