@extends('auth.layout')

@section('title','Registro')

@section('content')
<div class="col-md-6 offset-md-3">
    <div class="card" id="card-login">
        <div class="card-body">
            <h5 class="card-title text-center p-3"><strong>Registro de usuarios</strong></h5>
            <form method="POST" action="{{route('register')}}">
                {{csrf_field()}}
                <div class="form-group {{ $errors->has('name') ? 'alert alert-danger' : '' }}">
                    <label for="name">Nombre</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ old('name')}}"
                        placeholder="Ingresar nombre">
                    {!! $errors->first('name','<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {{ $errors->has('email') ? 'alert alert-danger' : '' }}">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" value="{{ old('email')}}"
                        placeholder="Ingresar email">
                    {!! $errors->first('email','<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {{ $errors->has('password') ? 'alert alert-danger' : '' }}">
                    <label for="password">Contraseña</label>
                    <input class="form-control" type="password" name="password" id="password"
                        placeholder="Ingresar contraseña">
                    {!! $errors->first('password','<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {{ $errors->has('password') ? 'alert alert-danger' : '' }}">
                    <label for="password_confirmation">Confirmar contraseña</label>
                    <input class="form-control" type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="Confirmar contraseña">
                    {!! $errors->first('password','<small class="help-block">:message</small>') !!}
                </div>
                <button class="btn btn-primary btn-block">Agregar</button>
            </form>
        </div>
        <div class="registro"><a href="{{url('login')}}">Volver</a></div>
    </div>
</div>
@endsection