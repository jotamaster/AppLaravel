@extends('layout.plantilla')
@section('pageheader')
<div class="pageheader">
<h2><i class="fa fa-home"></i> Inicio <span>Agrecar de usuario</span></h2>
    <div class="breadcrumb-wrapper">
        <span class="label">Estás aquí : </span>
        <ol class="breadcrumb">
            <li><a href="index.html">Inicio</a></li>
            <li class="active">Agregar de usuario</li>
        </ol>
    </div>
</div>
@stop
@section('content')




<div class="row">
  <div class="col-md-12">
    <h3>Crear cuenta de usuario</h3>
    <hr>
  </div>
  <form class="" action="index.html" method="post">

<div class="col-md-10 col-xs-12 col-md-offset-1">
  <div class="col-md-12">
    <div class="col-md-6">
      <label for="">Nombre</label>
      <input class="form-control" type="text">
    </div>
    <div class="col-md-6">
      <label for="">Apellido</label>
      <input class="form-control" type="text">
    </div>
  </div>
  <div class="col-md-12">
    <div class="col-md-6">
      <label for="">Nick</label>
      <input class="form-control" type="text">
    </div>
    <div class="col-md-6">
      <label for="">RUT</label>
      <input class="form-control" type="text">
    </div>
  </div>
  <div class="col-md-12">
    <div class="col-md-6">
      <label for="">Correo</label>
      <input class="form-control" type="text">
    </div>
    <div class="col-md-6">
      <label for="">Direccion</label>
      <input class="form-control" type="text">
    </div>
  </div>
  <div class="col-md-12">
    <div class="col-md-6">
      <label for="">Departamento</label>
      <input class="form-control" type="text">
    </div>
    <div class="col-md-6">
      <label for="">Unidad</label>
      <input class="form-control" type="text">
    </div>
  </div>
  <div class="col-md-12">
    <div class="col-md-6">
      <label for="">Cargo</label>
      <input class="form-control" type="text">
    </div>
    <div class="col-md-6">
      <div class="col-md-10">
      <label for="">Generar Contraseña</label>
      <input class="form-control" type="text">
      </div>
      <div class="col-md-2">
        <br>
        <button class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-right
"></span></button>
      </div>
    </div>
  </div>
  <br>
  <div class="col-md-12">
    <br>
    <div class="col-md-6">
      <input type="submit" class="btn btn-primary" value="agregar">
    </div>

  </div>
    </form>
    </div>
</div>




@stop
