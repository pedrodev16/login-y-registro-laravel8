@extends('layout.app')

@section('title','registro')

@section('content')



<style>
  
  .form {
    width: 450px;
  }
    </style>
    


<h1 class="text-center"> Registro</h1>

<div class="container">
<div class="row justify-content-center">


<form class="form" method="post" action="{{route('registro.store')}}" >
    @csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name">
@error('name')
<div class="alert alert-danger" role="alert">{{ $message }}.</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="email" class="form-control" value="{{old('email')}}" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    @error('email')
<div class="alert alert-danger" role="alert">{{ $message }}.</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    @error('password')
<div class="alert alert-danger" role="alert">{{ $message }}.</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> confirmar Password</label>
    <input type="password" name="password_confirmation" class="form-control" >
    @error('password_confirmation')
<div class="alert alert-danger" role="alert">{{ $message }}.</div>
    @enderror

  </div>
 



  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
</div>

</div>

@endsection