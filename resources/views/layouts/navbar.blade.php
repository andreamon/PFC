<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand px-3" href="/"><h4>Inicio</h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="#">Mis Peticiones</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Nueva Petición
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{url('peticiones/create/1')}}">Consulta</a>
            <a class="dropdown-item" href="{{url('peticiones/create/2')}}">Reclamo</a>
            <a class="dropdown-item" href="{{url('peticiones/create/3')}}">Solicitud</a>
            <a class="dropdown-item" href="{{url('peticiones/create/4')}}">Otro tipo</a>
            </div>
        </li>
    </ul>
    
        <ul class="navbar-nav px-3">
            <li class="nav-item dropdown text-nowrap">
                <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{auth()->user()->name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="dropdown-item">
                    <form action="{{route('logout')}}" method="post">
                        {{csrf_field()}}
                        <button class="btn btn-block">Cerrar sesión</button>
                    </form>
                </div>
            </li>
        </ul>
  </div>
</nav>