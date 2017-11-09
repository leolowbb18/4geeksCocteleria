@extends('dashboard')

@section('content')

  <div class="col-sm-12">
  <h2> 
    Listado de Usuarios
    <a href="{{ route('usuarios.create') }}" class="clase2 btn-group pull-right">nuevo</a>
  </h2> 
  @include('crudUsuarios.mensajeCrud')
  <table class="table table-hover table-stripded">
    <th>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Nivel</th>
        <th colspan="3"> </th>
      </tr>
    </th>
    <tbody>
      @foreach($usu as $users)
      <tr>
        <td>{{ $users->id }}</td> 
        <td>{{ $users->name }}</td>
        <td>{{ $users->email }}</td> 
        <td>{{ $users->admin }}</td>
        <td>
          <a href="{{ route('usuarios.edit', $users->id) }}">editar</a>
        </td>
        <td>
         
           {!! Form::open(['route' => ['usuarios.destroy', $users->id], 'method' => 'DELETE']) !!}
              <button class="link">
                Borrar
              </button>             
            {!! Form::close() !!}

        </td>
      </tr>
      @endforeach
    </tbody>
  </table> 
  {!! $usu->render() !!}
  </div>
@stop