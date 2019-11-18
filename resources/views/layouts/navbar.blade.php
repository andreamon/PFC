<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{url('/')}}">Peticiones</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <div class="logout">
                <form action="{{route('logout')}}" method="post">
                    {{csrf_field()}}
                    <button class="btn btn-danger btn-sm btn-block">Cerrar sesión</button>
                </form>
            </div>
        </li>
    </ul>
</nav>