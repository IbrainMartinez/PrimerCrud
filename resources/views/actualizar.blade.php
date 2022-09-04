@extends('layout/principal')
@section("tituloPagina y6", "Crea un nuevo registro")

@section('contenido')
<br>
<div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Actualizar Persona</h5>
      <p class="card-text">Xavier Ibrain Martinez Rodriguez</p>
    </div>
  </div>
  <br>
  <div class="container">
  
    <form action="{{route('personas.update', $personas->id)}}" class="form" method="POST">

      @csrf
      @method("PUT")

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre" value="{{$personas->nombre}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="apellidoP" value="{{$personas->apellidoP}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellido Materno</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="apellidoM" value="{{$personas->apellidoM}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fecha_nacimiento" value="{{$personas->fecha_nacimiento}}">
        </div>

        <a href="{{ route('personas.index')}}" class="btn btn-dark text-white ">Regresar</a>
        <button class="btn btn-primary">Enviar</button>
        
    </form>
  </div>

@endsection