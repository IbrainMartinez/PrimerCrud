@extends('layout/principal')
@section("tituloPagina y6", "Crea un nuevo registro")

@section('contenido')
<br>
<div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Agregar Persona</h5>
      <p class="card-text">Xavier Ibrain Martinez Rodriguez</p>
    </div>
  </div>
  <br>
  <div class="container">
    <div class="alert alert-danger text-center" role="alert">
        Quieres eliminar este registro?
      </div>
      <table class="table table-boder">
        <thead>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Fecha de nacimiento</th>
        </thead>
        <tbody>

            <td>{{$personas->nombre}}</td>
            <td>{{$personas->apellidoP}}</td>
            <td>{{$personas->apellidoM}}</td>
            <td>{{$personas->fecha_nacimiento}}</td>
        </tbody>
      </table>
      <form action="{{route('personas.destroy', $personas->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <a class="btn btn-dark text-white" href="{{ route('personas.index')}}">Regresar</a>
        <button class="btn btn-danger">Eliminar</button>
    </form>
  </div>

@endsection