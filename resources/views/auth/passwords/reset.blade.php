<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
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
                        <form method="POST" action="{{route('password.send')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" name="email" id="email" value="{{$email}}">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input class="form-control" type="password" name="password" id="password">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirmar contraseña</label>
                                <input class="form-control" type="password" name="password_confirmation"
                                    id="password_confirmation">
                            </div>
                            <input type="hidden" name="token" value={{$token}}>
                            <input type="submit" class="btn btn-info" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>