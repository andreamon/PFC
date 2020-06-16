@extends('auth.layout')

@section('title','Iniciar sesión')

@section('content')
    <div class="col-md-4 offset-md-4">
        <div class="card" id="card-login">
            <div class="card-body">
                <h5 class="card-title text-center p-3"><strong>Sistema de Peticiones</strong></h5>
                <form method="POST" action="{{route('login')}}">
                    {{csrf_field()}}
                    <div class="form-group {{ $errors->has('email') ? 'alert alert-danger' : '' }}">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" value="{{ old('email')}}"
                            placeholder="Ingresar email" autofocus>
                        {!! $errors->first('email','<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('password') ? 'alert alert-danger' : '' }}">
                        <label for="password">Contraseña</label>
                        <input class="form-control" type="password" name="password"
                            placeholder="Ingresar contraseña">
                        {!! $errors->first('password','<small class="help-block">:message</small>') !!}
                    </div>
                    <button class="btn btn-primary btn-block">Acceder</button>
                </form>
            </div>
            <div class="registro"><a href="{{url('register')}}">¿No tenés usuario? Registrate</a></div>
            <div class="registro"><a href="{{url('password/reset')}}">¿Olvidaste tu contraseña?</a></div>
        </div>
    </div>
@endsection