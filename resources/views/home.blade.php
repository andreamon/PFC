@extends('layouts.plantilla')
@section('title',"Últimas peticiones")
@section('content')
<div class="row">
    @foreach($posts as $post)
    <div class="card mb-3 ml-4">
        <div class="card-body">
            <h5 class="card-title">{{$post->id}}</h5>
            <p class="card-text">{{$post->description}}</p>
            <p class="card-text"><small class="text-muted">{{$post->created_at}}</small></p>
            <button type="button" class="btn btn-primary btn-sm stretched-link">Ver más</button>
        </div>
    </div>
    @endforeach
    <!-- <div class="card mb-3 ml-4">
        <div class="card-body">
            <h5 class="card-title">Petición 2</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <button type="button" class="btn btn-primary btn-sm stretched-link">Ver más</button>
        </div>
    </div> -->
</div>
@endsection