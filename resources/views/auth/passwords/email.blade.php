@extends('auth.layout')

@section('title','Restablecer contraseña')

@section('content')
    <div class="col-md-4 offset-md-4">
        <div class="card" id="card-login">
            <div class="card-body">
                <h5 class="card-title text-center p-3"><strong>Restablecer contraseña</strong></h5>
                @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                @endif
                <form method="POST" action="{{route('password.email')}}">
                    {{csrf_field()}}
                    <div class="form-group {{ $errors->has('email') ? 'alert alert-danger' : '' }}">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email">
                        {!! $errors->first('email','<small class="help-block">:message</small>') !!}
                    </div>
                    <button class="btn btn-primary btn-block">Recuperar contraseña</button>
                </form>
            </div>
            <div class="registro"><a href="{{url('login')}}">Volver</a></div>
        </div>
    </div>
@endsection