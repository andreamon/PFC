@extends('layouts.plantilla')
@section('title',$tipo)
@section('content')
<div class="row justify-content-center">
    <div class="col-8">
        <!--Espacio en blanco-->
        <div class="col-12">&nbsp;</div>
    </div>
    <div class="col-6">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Se ha detectado el siguiente error</strong><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{url('peticiones')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="date">Tipo de Petición</label>
                <input class="form-control" type="text" name="tipo" readonly placeholder="{{$tipo}}">
            </div>
            <div class="form-group">
                <label for="">Descripción</label>
                <textarea type="text" class="form-control" name="descripcion" placeholder="Ingrese su {{$tipo}}" rows="8" required autofocus></textarea>
            </div>
            <div class="form-group">
                <label for="img">Subir imágenes</label>
                <input type="file" class="form-control-file" name="input_img">
            </div>
            <div class="form-group ">
                <input type="submit" class="btn btn-primary" name="enviar" value="Agregar petición">
            </div>
        </form>
    </div>
</div>
@endsection