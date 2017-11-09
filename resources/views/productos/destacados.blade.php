@extends('esquema')

@section('content')

  <div class="col-sm-12">
  <h2 class="crud"> 
    Productos destacados
  </h2> 
  @include('productos.mensajeCrud')
  <table class="table table-hover table-stripded">
    <th>
      <tr>
        <th with="20px">Imagen</th>
        <th with="20px">ID</th>
        <th>NOMBRE DEL PRODUCTO</th>
        <th>DESCRICION</th>
        <th>PRECIO</th>
        <th colspan="3"> </th>
      </tr>
    </th>
    <tbody>
      @foreach($prod as $products)
      <tr>
        <td>
          <img src="{{ $products->img }}" alt="Smiley face" height="42" width="42"> 
        </td>
        <td>{{ $products->id }}</td> 
        <td>{{ $products->titulo }}</td>
        <td>{{ $products->description }}</td>
        <td>{{ $products->precio }}</td>
        <td>
          <a href="{{ route('tienda.show', $products->id) }}">Comprar</a>
        </td>
        
      </tr>
      @endforeach
    </tbody>
  </table> 
  {!! $prod->render() !!}
  </div>
@stop