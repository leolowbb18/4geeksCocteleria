@extends('esquema')

@section('content')

  <div class="col-sm-10">
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
      
      <tr>
        <td><h2>Descripcion</h2></td>
      </tr>

      <tr>
        <td>{{ $prod->description }}</td>
      </tr>
      
      <tr>
        <td><h2>Precio</h2></td>
      </tr>
      
      <tr>
        <td>{{ $prod->precio }}</td>
      </tr>

      <tr>
        <td>
           {!! Form::open(['route' => 'tienda.store']) !!}
          <div class="form-group">
            {!! Form::label('admin', 'Nivel del Usuario') !!}
            {!! Form::number('admin', null, ['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::submit('PAGO', ['class' => 'btn btn-primary']) !!}
          </div>
        </td>
        {!! Form::close() !!}
      </tr>
      

    </table>
  </div>
  <div class="col-sm-2">
    <a href="{{ route('vistas') }}" class="btn clase2 btn-group">REGRESAR</a>
  </div> 
@stop