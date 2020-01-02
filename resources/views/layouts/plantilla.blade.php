<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyectito</title>
    
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard.css')}}" rel="stylesheet">
    <link href="{{asset('lib/fontawesome/css/all.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->
</head>

<body>
    <div class="cabecera">
        @include("layouts.navbar")
    </div>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('/')}}">
                                <span data-feather="home"></span>
                                Inicio <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('peticiones')}}">
                                <span data-feather="file"></span>
                                Mis Peticiones
                            </a>
                        </li>
                    </ul>
                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Crear</span>
                        <a class="d-flex align-items-center text-muted" href="#">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('peticiones/create/1')}}">
                                <span data-feather="file-text"></span>
                                Consulta
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('peticiones/create/2')}}">
                                <span data-feather="file-text"></span>
                                Solicitud
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('peticiones/create/3')}}">
                                <span data-feather="file-text"></span>
                                Reclamo
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('peticiones/create/4')}}">
                                <span data-feather="file-text"></span>
                                Otro tipo
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{url('peticiones')}}">Peticiones</a></li>
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