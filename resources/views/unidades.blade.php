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
<div class=" col-md-10 col-md-offset-1 " >
          <div class=" col-md-12 col-lg-12 text-center">
            @if(session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
            @endif
          <h3>Unidades</h3>
          <div class="col-md-3">

          <a href="/createUnidades" class="btn btn-primary" role="button">Agregar Unidad</a>

          </div>
<br>
<br>
<br>
            <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Departamento</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
    @foreach($unidades as $unidad)
      <tr>
        <td>{{ $unidad->nombre }}</td>
        <td>{{ $unidad->nombre_departamento}}</td>
        <td>
        <form class="deleteFom" method="POST" action="crudUnidades/edit/{{$unidad->id}}">

      {{ csrf_field() }}
        <input class="btn btn-warning" type="submit" name="edit" value="edit">
      </form>
      </td>

        <td>
        <form class="deleteForm" method="POST" action="crudUnidades/{{$unidad->id}}">
      {{method_field('DELETE')}}
      {{ csrf_field() }}
        <input class="btn btn-danger" type="submit" value="Eliminar">
      </form>
      </td>

      </tr>
    @endforeach
    </tbody>
  </table>
</div>

          </div>

          <script type="text/javascript">
            $(document).ready(function(){
               $('.alert').delay(2000).fadeOut(400);
               $('.deleteForm').on('submit',function(){
                  return confirm("Estas seguro de borrar este registro?");
               });
            });
          </script>


@stop
