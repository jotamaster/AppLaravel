@extends('layout.plantilla')
@section('pageheader')
<div class="pageheader">
<h2><i class="fa fa-home"></i> Inicio <span>Gestion de usuario</span></h2>
    <div class="breadcrumb-wrapper">
        <span class="label">Estás aquí : </span>
        <ol class="breadcrumb">
            <li><a href="index.html">Inicio</a></li>
            <li class="active">Gestion de Usuario</li>
        </ol>
    </div>
</div>
@stop
@section('content')


<div class="col-md-offset-1 col-md-10 box">


<form method="POST" action="{{ url('crudDepartamentos/'.$departamento->id) }}" class="col-md-4 col-md-offset-4">
	<h3>Agregar Producto</h3>

  @if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <p>Por favor corrige los siguientes errores:</p>
        <ul>
          @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
          @endforeach
        </ul>
    </div>
  @endif



	{{ csrf_field() }}
  {{method_field('PUT')}}
{{-- <input type="hidden" name="_method" value="PUT"> --}}
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" value="{{$departamento->nombre}}" placeholder="Nombre">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


@stop
