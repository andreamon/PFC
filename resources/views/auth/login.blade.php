<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Proyectito</title>
    <!-- El helper asset nos dará la ruta absoluta al archivo indicado -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('lib/fontawesome/css/all.min.css')}}" rel="stylesheet"> -->
    <!-- <link href="{{asset('lib/lightbox/ekko-lightbox.css')}}" rel="stylesheet"> -->
    <style>
    .image-logo {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .registro {
        text-align: center;
        margin-bottom: 20px;
    }

    .container {
        margin-bottom: 100px;
        margin-top: 50px;
    }

    .pie {
        clear: both;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row ">
            <div class="col-md-4 offset-md-4">
                <!-- <img src="{{asset('images/.png')}}" class="image-logo" alt=""> -->
                <hr>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-center">Acceso a la aplicación</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('login')}}">
                            {{csrf_field()}}
                            <div class="form-group {{ $errors->has('email') ? 'alert alert-danger' : '' }}">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" name="email" value="{{ old('email')}}"
                                    placeholder="Ingresar email" autofocus>
                                {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('password') ? 'alert alert-danger' : '' }}">
                                <label for="password">Contraseña</label>
                                <input class="form-control" type="password" name="password"
                                    placeholder="Ingresar contraseña">
                                {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                            </div>
                            <button class="btn btn-primary btn-block">Acceder</button>
                        </form>
                    </div>
                    <div class="registro"><a href="{{url('register')}}">¿No tenés usuario? Registrate</a></div>
                    <div class="registro"><a href="{{url('password/reset')}}">¿Olvidaste tu contraseña?</a></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>