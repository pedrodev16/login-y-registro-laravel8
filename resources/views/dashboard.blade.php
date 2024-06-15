@extends('layout.app')

@section('title','Bienvenido ')

@section('content')

<h1 class="text-center"> Bienvenido <?= isset($data_usuario->name)?$data_usuario->name:'' ?></h1>


@endsection