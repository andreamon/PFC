@extends('layouts.plantilla')
@section('title',$tipo)
@section('content')
<div id="app">
    <create v-bind:category="{{json_encode($tipo)}}"></create>
</div>
@endsection