@extends('layouts.plantilla')
@section('title',$tipo["name"])
@section('content')
<div id="app">
    <create v-bind:category="{{json_encode($tipo)}}"></create>
</div>
@endsection