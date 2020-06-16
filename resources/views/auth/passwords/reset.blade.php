@extends('auth.layout')

@section('title','Restablecer contraseña')

@section('content')
    <div class="col-md-4 offset-md-4">
        <div class="card" id="card-login">
            <div class="card-body">
                <h5 class="card-title text-center p-3"><strong>Restablecer contraseña</strong></h5>
                <form method="POST" action="{{route('password.send')}}">
                    {{csrf_field()}}
                    <div class="form-group {{ $errors->has('email') ? 'alert alert-danger' : '' }}">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email" value="{{$email}}">
                        {!! $errors->first('email','<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('password') ? 'alert alert-danger' : '' }}">
                        <label for="password">Contraseña</label>
                        <input class="form-control" type="password" name="password" id="password">
                        {!! $errors->first('password','<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('password') ? 'alert alert-danger' : '' }}">
                        <label for="password_confirmation">Confirmar contraseña</label>
                        <input class="form-control" type="password" name="password_confirmation"
                            id="password_confirmation">
                            {!! $errors->first('password','<small class="help-block">:message</small>') !!}
                    </div>
                    <input type="hidden" name="token" value={{$token}}>
                    <input type="submit" class="btn btn-primary btn-block" value="Enviar">
                </form>
            </div>
        </div>
    </div>
@endsection