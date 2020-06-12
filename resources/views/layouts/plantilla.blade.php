<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PFC</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard.css')}}" rel="stylesheet">
    <link href="{{asset('lib/fontawesome/css/all.min.css')}}" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{asset('estilos.css')}}">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->
</head>

<body>
    <div class="cabecera">
        @include("layouts.navbar")
    </div>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <main role="main" class="col-md-9 col-lg-10 px-4">
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Peticiones</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                    </ol>
                </nav>
                <div class="container">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('lib/jquery/jquery-3.4.1.js')}}"></script>
    <!-- <script src="{{asset('js/bootstrap.min.js')}}"></script> -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>