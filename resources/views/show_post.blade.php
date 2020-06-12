@extends('layouts.plantilla')
@section('title',"Post N° ". $id)
@section('content')
<div id="app">
    <item :id="{{json_encode($id)}}" />
</div>
@endsection