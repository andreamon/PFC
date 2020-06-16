<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- El helper asset nos dará la ruta absoluta al archivo indicado -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
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
        <div class="row">
            @yield('content')
        </div>
    </div>
</body>
</html>