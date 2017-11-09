@extends('dashboard')

@section('content')

  <div class="col-sm-12">
  <h2> 
    Listado de productos
    <a href="{{ route('products.create') }}" class="clase2 btn-group pull-right">nuevo</a>
  </h2> 
  @include('productos.mensajeCrud')
  <table class="table table-hover table-stripded">
    <th>
      <tr>
        <th with="20px">Imagen</th>
        <th with="20px">ID</th>
        <th>NOMBRE DEL PRODUCTO</th>
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
        <td>
          <a href="{{ route('products.show', $products->id) }}">ver</a>
        </td>
        <td>
          <a href="{{ route('products.edit', $products->id) }}">editar</a>
        </td>
        <td>
         
           {!! Form::open(['route' => ['products.destroy', $products->id], 'method' => 'DELETE']) !!}
              <button class="link">
                Borrar
              </button>             
            {!! Form::close() !!}

        </td>
      </tr>
      @endforeach
    </tbody>
  </table> 
  {!! $prod->render() !!}
  </div>
@stop