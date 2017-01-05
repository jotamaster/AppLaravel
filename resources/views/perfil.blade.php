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


<div class="col-md-12">
  <h3>Mi Perfil</h3>
  <hr>
</div>

<div class="col-md-12">
  <div class="col-md-4">
    <dic class="col-md-12">
      <img src="{{ Auth::user()->usuImg}}" alt="profile image" class="img-thumbnail"style="width:250px">
    </dic>

  </div>



  <div class="col-md-6">
    <h1>Cambiar imagen de perfil</h1>
<form method='post' action='{{url("perfil")}}' enctype='multipart/form-data'>
	{{csrf_field()}}
	<div class='form-group'>
		<label for='image'>Imagen: </label>
		<input type="file" name="image" />
		<div class='text-danger'>{{$errors->first('image')}}</div>
	</div>
	<button type='submit' class='btn btn-primary'>Actualizar imagen de perfil</button>
</form>
  </div>
  <div class="col-md-12">
    <h3>{{ Auth::user()->name}}</h3>
  </div>

</div>


@stop
