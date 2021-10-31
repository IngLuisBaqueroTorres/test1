@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1>Tablero</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Bienvenido</h1>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis cumque vitae, natus provident repudiandae voluptates doloribus impedit animi ipsa vel aspernatur? Fugiat facilis dicta laboriosam dolor molestias impedit vel consectetur.</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
