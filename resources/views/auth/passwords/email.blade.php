<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Recuperar Contraseña</title>
    <!-- El helper asset nos dará la ruta absoluta al archivo indicado -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/fontawesome/css/all.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('estilos.css')}}">
    <style>
    body {
        background-color: #F2F2F2;
    }
    .registro {
        text-align: center;
        margin-bottom: 20px;
    }
    .container {
        margin-top: 25px;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row ">
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
        </div>
    </div>
</body>
</html>