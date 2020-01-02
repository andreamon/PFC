@extends('layouts.plantilla')
@section('title',"Nueva")
@section('content')
<div class="dropdown">
  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Nueva Petición
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="{{url('peticiones/create/1')}}">Consulta</a>
    <a class="dropdown-item" href="{{url('peticiones/create/2')}}">Solicitud</a>
    <a class="dropdown-item" href="{{url('peticiones/create/3')}}">Reclamo</a>
    <a class="dropdown-item" href="{{url('peticiones/create/4')}}">Otros</a>
  </div>
</div>
@endsection