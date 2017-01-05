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


<form method="POST" action="{{ url('crudUnidades') }}" class="col-md-6 col-md-offset-3">
	<h3>Agregar Unidad</h3>

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
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" value="{{old('nombre')}}" placeholder="Nombre">
  </div>
  <div class="form-group">

  <label for="">Departamento</label>
    {!! Form::select('id_departamento',$departamentos,null,['id'=>'departamentos','class'=>'form-control']) !!}
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
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
