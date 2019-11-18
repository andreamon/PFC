<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Proyectito</title>
    <!-- El helper asset nos dará la ruta absoluta al archivo indicado -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/fontawesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/ekko-lightbox.css')}}" rel="stylesheet">
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
            <div class="col-md-6 offset-md-3">
                <!-- <img src="{{asset('images/patitas_logo.png')}}" class="image-logo" alt="patitas"> -->
                <hr>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-center">Registro de usuarios</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('register')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input class="form-control" type="text" name="name" id="name"
                                    placeholder="Ingresar nombre">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" name="email" placeholder="Ingresar email">
                            </div>
                            <div class="form-group {{ $errors->has('password') ? 'alert alert-danger' : '' }}">
                                <label for="password">Contraseña</label>
                                <input class="form-control" type="password" name="password" id="password"
                                    placeholder="Ingresar contraseña">
                                {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirmar contraseña</label>
                                <input class="form-control" type="password" name="password_confirmation"
                                    id="password_confirmation" placeholder="Confirmar contraseña">
                            </div>
                            <button class="btn btn-primary btn-block">Agregar</button>
                        </form>
                    </div>
                    <div class="registro"><a href="{{url('login')}}">Volver</a></div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>