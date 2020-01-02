@extends('layouts.plantilla')
@section('title',"Últimas peticiones")
@section('content')
<div id="app" class="table-responsive">
    <table class="table table-hover table-sm">
        <!-- <thead>
            <tr>
                <th>Descripcion</th>
            </tr>
        </thead> -->
        <tbody>
            <tr v-for="post in posts">
                <td>@{{post.description}}</td>
                <td class="text-center">
                    <a href="#" class="btn btn-link" role="button" aria-pressed="true" data-toggle="tooltip"
                        title="Modificar"><i class="fas fa-pencil-alt"></i></a>
                    <form action="#" method="POST" style="display:inline-block">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-link" data-toggle="tooltip" title="Eliminar"><i
                                class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection