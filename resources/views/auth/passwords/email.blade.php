<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Recuperar Contraseña</title>
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
            <div class="col-md-4 offset-md-4">
                <hr>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-center">Restablecer contraseña</h5>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                        @endif
                        <form method="POST" action="{{route('password.email')}}">
                            {{csrf_field()}}
                            <div class="form-group {{ $errors->has('email') ? 'alert alert-danger' : '' }}">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" name="email">
                                {!! $errors->first('email','<span class="help-block">:message</span>') !!}
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