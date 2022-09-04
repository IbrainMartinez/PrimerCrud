{{-- busca el archivo --}}
@extends('layout/principal') 

{{-- cambia el titulo --}}
@section('tituloPagina' , 'Primer crud')


{{-- se establece donde se pone el contenido --}}
@section('contenido')
<br>
<div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Crud Laravel</h5>
      <p class="card-text">Xavier Ibrain Martinez Rodriguez</p>

      <p>
        <a href="{{ route("personas.create") }}" class="btn btn-primary">Registro</a>
    </p>
    <div class="row">
      <div class="col-sm-12">
        
        @if ($mensaje = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{$mensaje}}
        </div>
        @endif

       
      </div>
    </div>
    <br>
      <table class="table table-border">
        <thead>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Fecha de nacimiento</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        
        @foreach ($datos as $item)
        <tbody>
           
            <td>{{$item->nombre}}</td>
            <td>{{$item->apellidoP}}</td>
            <td>{{$item->apellidoM}}</td>
            <td>{{$item->fecha_nacimiento}}</td>

            <td>
              <form action="{{route('personas.edit', $item->id)}}" method="GET">
                <button class="btn btn-warning">Editar</button>
              </form>
            </td>

            <td>
              <form action="{{route('personas.show', $item->id)}}">
                <button class="btn btn-danger">Eliminar</button>
              </form>
            </td>
            
        </tbody>
        @endforeach
      </table>
      <hr>
      <div class="row">
        <div class="col-sm-12">
          {{$datos->links()}}
        </div>
      </div>
    </div>
  </div>


@endsection