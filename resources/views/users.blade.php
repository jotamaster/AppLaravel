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

<div class="row">
  <br>
  <div class="col-md-12">
    <div class="col-md-1">
    <button class="btn btn-primary" type="button" name="button" data-toggle="modal" data-target="#miModal" ><span class="fa fa-fw fa-plus"></span>Agregar Usuario</button>
    </div>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <table class="table">
      <thead>
        <tr>
        <th>RUT</th>
        <th>Nombre</th>
        <th>Cargo</th>
        <th>Departamento</th>
        <th>Unidad</th>
        <th>Correo</th>
        <th>Direccion</th>
        <Th>Editar</Th>
        <th>Borrar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>18.963.020-4</td>
          <td>Juan Perez</td>
          <td>Jefe</td>
          <td>SECPLAN</td>
          <td>SECPLAN</td>
          <td>Juan@puyehue.cl</td>
          <td>lynch 2130 osorno</td>
          <td><button class="btn btn-warning" type="button" name="button">Editar</button></td>
          <td>  <button class="btn btn-danger" type="button" name="button" data-toggle="modal" data-target="#modalEliminar" ><span class="fa fa-fw fa-trash"></span>Eliminar</button></td>

        </tr>
        <tr>
          <td>18.963.020-4</td>
          <td>Juan Perez</td>
          <td>Jefe</td>
          <td>SECPLAN</td>
          <td>SECPLAN</td>
          <td>Juan@puyehue.cl</td>
          <td>lynch 2130 osorno</td>
          <td><button class="btn btn-warning" type="button" name="button">Editar</button></td>
          <td>  <button class="btn btn-danger" type="button" name="button" data-toggle="modal" data-target="#modalEliminar" ><span class="fa fa-fw fa-trash"></span>Eliminar</button></td>

        </tr>
        <tr>
          <td>18.963.020-4</td>
          <td>Juan Perez</td>
          <td>Jefe</td>
          <td>SECPLAN</td>
          <td>SECPLAN</td>
          <td>Juan@puyehue.cl</td>
          <td>lynch 2130 osorno</td>
          <td><button class="btn btn-warning" type="button" name="button">Editar</button></td>
          <td>  <button class="btn btn-danger" type="button" name="button" data-toggle="modal" data-target="#modalEliminar" ><span class="fa fa-fw fa-trash"></span>Eliminar</button></td>

        </tr>
        <tr>
          <td>18.963.020-4</td>
          <td>Juan Perez</td>
          <td>Jefe</td>
          <td>SECPLAN</td>
          <td>SECPLAN</td>
          <td>Juan@puyehue.cl</td>
          <td>lynch 2130 osorno</td>
          <td><button class="btn btn-warning" type="button" name="button">Editar</button></td>
          <td>  <button class="btn btn-danger" type="button" name="button" data-toggle="modal" data-target="#modalEliminar" ><span class="fa fa-fw fa-trash"></span>Eliminar</button></td>

        </tr>



      </tbody>
    </table>
  </div>
</div>


<div class="modal fade" id="miModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" aria-hidden="true" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar Usuario</h4>
      </div>
      <div class="modal-body">


        <div class="row">
          <div class="col-md-6 col-xs-12">
            <label for="">RUT</label>
            <input class="form-control" type="text" >
            </div>
            <div class="col-md-6 col-xs-12">
              <label for="">Nombre</label>
              <input class="form-control" type="text" >
              </div>
              <div class="col-md-6 col-xs-12">
                <label for="">Apellido</label>
                <input class="form-control" type="text" >
              </div>
              <div class="col-md-6 col-xs-12">
                <label for="">Departamento</label>
                <input class="form-control" type="text" >
              </div>
              <div class="col-md-6 col-xs-12">
                <label for="">Unidad</label>
                <input class="form-control" type="text" >
              </div>
              <div class="col-md-6 col-xs-12">
                <label for="">Correo</label>
                <input class="form-control" type="text" >
              </div>
              <div class="col-md-6 col-xs-12">
                <label for="">Direccion</label>
                <input class="form-control" type="text" >
              </div>
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" name="button"> Cerrar</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalEliminar">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" aria-hidden="true" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar Usuario</h4>
      </div>
      <div class="modal-body">




      </div>
      <div class="modal-footer">
        <button class="btn btn-primary modal-close" type="button" name="button">Cancelar</button>
        <button class="btn btn-primary modal-close" type="button" name="button"> Aceptar</button>
      </div>
    </div>
  </div>
</div>


@stop
