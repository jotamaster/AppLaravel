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

  @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  @endif


<form method="POST" action="{{ url('subirdoc') }}" class="col-md-10 col-md-offset-1">
	<h3>Documento</h3>

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
  <div class="col-md-6">
      {!!Form::label('nombre', 'Nombre')!!}
      {{ Form::input('text', 'nombreDocumento', null, ['class' => 'form-control']) }}
  </div>
  <div class="col-md-6">
      {!!Form::label('nombre', 'Tipo Documento')!!}
      <select class="form-control" name="tipoDocumento">
        <option value="">Selecciona</option>
        <option value="decreto">Decreto</option>
        <option value="oficio" >Oficio</option>
        <option value="solicitud">Solicitud</option>
      </select>
  </div>

  <div class="col-md-6">
    <label for="">Departamento</label>
      {!! Form::select('departamentos',$departamentos,null,['placeholder'=>'Selecciona','id'=>'departamentos','class'=>'form-control']) !!}

  </div>

  <div class="col-md-6">
    <label for="">Unidad</label>

          {!! Form::select('unidades',['placeholder'=>'Selecciona'],null,['id'=>'unidades','class'=>'form-control']) !!}
  </div>

  <div class="col-md-6">
    <label for="">Asunto</label>

        {{ Form::textarea('asunto', null, ['size' => '35x2']) }}
  </div>
  <div class="col-md-6">
    <label for="">Tipo de solicitante</label>
      <select class="form-control" name="tipoSolicitante">
        <option value="Institucion">Institucion</option>
        <option value="Empresa">Empresa</option>
        <option value="Particular">Particular</option>
      </select>
  </div>
  <br><br>

  <div class="col-md-12">
    <h3>responsable</h3>
    <div class="col-md-6">
        {!!Form::label('nombre', 'RUT')!!}

        <input type="text" class="form-control" name="rutResponsable"
         data-toggle="tooltip" data-placement="right" title="Ej: 12345678"> </input>
    </div>
    <div class="col-md-6">
        {!!Form::label('nombre', 'Nombre')!!}
        {{ Form::input('text', 'nombreResposable', null, ['class' => 'form-control']) }}
    </div>
    <div class="col-md-6">
        {!!Form::label('nombre', 'Apellido')!!}
        {{ Form::input('text', 'Apellido', null, ['class' => 'form-control']) }}
    </div>
    <div class="col-md-6">
        {!!Form::label('nombre', 'Telefono')!!}
        {{ Form::input('text', 'telefono', null, ['class' => 'form-control']) }}
    </div>
    <div class="col-md-6">
        {!!Form::label('nombre', 'Direccion')!!}
        {{ Form::input('text', 'direccion', null, ['class' => 'form-control']) }}
    </div>
    <div class="col-md-6">
        {!!Form::label('nombre', 'Correo')!!}
        {{ Form::input('email', 'correo', null, ['class' => 'form-control']) }}
    </div>


  </div>

  <div class="col-md-12">
<h3>archivo</h3>
  <input type="file" id="ejemplo_archivo_1" multiple>
  </div>



  <div class="col-md-6">
      <br><br>
    {{ Form::submit('Subir', array('class' => 'btn')) }}

  </div>








<script>
$(function () {
$('[data-toggle="tooltip"]').tooltip()
})
</script>

<script type="text/javascript">
  $(document).ready(function(){
     $('.alert').delay(6000).fadeOut(400);
     $('.deleteForm').on('submit',function(){
        return confirm("Estas seguro de borrar este registro?");
     });
  });
</script>

<script>
$("#departamentos").change(event => {
	$.get(`unidades/${event.target.value}`, function(res, sta){
		$("#unidades").empty();
		res.forEach(element => {
			$("#unidades").append(`<option value=${element.id}> ${element.nombre} </option>`);
		});
	});
});

</script>

@stop
