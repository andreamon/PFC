@extends('layouts.plantilla')
@section('title',"Peticiones")
@section('content')
<div class="col table-responsive mt-5">
    <table class="table table-hover table-sprite">
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>
                    <strong>{{$post->category}}</strong>
                    <div>&nbsp;</div>
                    <p>{{$post->title}}</p>
                    <p><small class="text-muted">Realizado por {{$post->user}}</small></p>
                </td>
                <td style="vertical-align: inherit;">
                    <a style="display: flex; align-items: center;" href="#" class="btn btn-link" data-toggle="tooltip" title="Ver más">
                        Detalles&nbsp;<i class="fas fa-eye"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection