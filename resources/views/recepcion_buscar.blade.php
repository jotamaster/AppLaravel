@extends('layout.plantilla')
@section('pageheader')
<div class="pageheader">
<h2><i class="fa fa-home"></i> Inicio <span>Buscar documento</span></h2>
    <div class="breadcrumb-wrapper">
        <span class="label">Estás aquí : </span>
        <ol class="breadcrumb">
            <li><a href="index.html">Inicio</a></li>
            <li class="active">Buscar documento</li>
        </ol>
    </div>
</div>
@stop
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="col-md-3">
      <label for="">Folio Documento</label>
        <input class="form-control" type="text">
    </div>
    <div class="col-md-3">
      <label for="">Nombre Responsable</label>
      <input class="form-control" type="text">
    </div>
    <div class="col-md-3">
      <label for="">Tipo documento</label>
      <select class="form-control" class="" name="">
        <option value="1">Decreto</option>
        <option value="2">Oficio</option>
        <option value="3">Solicitud</option>
      </select>
    </div>
    <div class="col-md-2">
      <label for=""> </label>
      <input class="form-control btn btn-primary" type="submit" name="" value="Buscar">
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <h4>Documento</h4>
    <hr>
  </div>
  <div class="col-md-12">
    <table class="table">
      <thead>

        <tr>
        <th>Folio</th>
        <th>Recepción</th>
        <th>Nombre</th>
        <th>Tipo documento</th>
        <th>Tipo Solicitante</th>
        <th>Rut responsable</th>
        <th>estado</th>
        <th>ver</th>
        </tr>
      </thead>
      <tbody>
          @foreach($documentos as $documento)
        <tr>
          <td>{{$documento->id}}</td>
          <td>{{$documento->created_at}}</td>
          <td>{{$documento->nombre}}</td>
          <td>{{$documento->tipoDoc}}</td>
          <td>{{$documento->tipoSolicitante}}</td>
          <td>{{$documento->rut_responsable}}</td>
          <td>{{$documento->estado}}</td>
          <td><button class="btn btn-primary" type="button" name="button" data-toggle="modal" data-target="#miModal" ><span class="fa fa-fw fa-search"></span></button></td>
        </tr>
    @endforeach

      </tbody>
    </table>
  </div>
</div>

<!-- MODAL -->
<div class="modal fade" id="miModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" aria-hidden="true" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Titulo del modal</h4>
      </div>
      <div class="modal-body">
        <table class="table">
          <thead>
            <tr>
              <th>title</th>
              <th>title</th>
              <th>title</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>info</td>
              <td>info</td>
              <td>info</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary"type="button" name="button"> Salir</button>
      </div>
    </div>
  </div>
</div>

@stop
