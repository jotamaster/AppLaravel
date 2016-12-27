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

@section('head')

@stop
@section('content')


    <div class="row">
      <div class="col-md-10 col-md-offset-2">
    	<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Paso 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Paso 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Paso 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-open-file"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <form role="form" method="post" action="home/create" accept-charset="UTF-8" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="step1">
                            <div class="row">

                                <div class="col-md-12">
                                  <h3>Detalle del documento</h3>
                                </div>
                            <div class="col-md-6">
                                <label for="">Nombre del Documento</label>
                                <input type="text" class="form-control" id="NomDoc" placeholder="Nombre del documento">
                            </div>
                            <div class="col-md-6">
                              <label for="">Tipo de documento</label>
                                <select class="form-control" name="TipoDoc">
                                  <option value="decreto">Decreto</option>
                                  <option value="oficio">Oficio</option>
                                  <option value="solicitud">Solicitud</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">




                          <div class="col-md-6">
                            <label for="">Departamento</label>
                              <select id="departamentos" class="form-control" name="departamentos"><option value="1">Dirección de administración y finanzas</option><option value="2">Dirección de obras</option><option value="3">Dirección de transito</option><option value="4">dirección de secplan</option><option value="5">Dideco</option><option value="6">Secretario municipal</option></select>

                          </div>

                          <div class="col-md-6">
                            <label for="">Unidad</label>

		                              <select id="unidades" class="form-control" name="unidades"><option value="placeholder">Selecciona</option></select>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Asunto</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Asunto del documento">
                            </div>
                            <div class="col-md-6">
                              <label for="">Tipo de solicitante</label>
                                <select class="form-control" name="TipoDoc">
                                  <option value="decreto">Institucion</option>
                                  <option value="oficio">Empresa</option>
                                  <option value="oficio">Particular</option>
                                </select>
                            </div>
                        </div>
                        </div>
                        <br>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Guardar y continuar</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <div class="step2">
                            <div class="step_21">
                                <div class="row">
                                  <div class="col-md-12">
                                    <h3>Datos del Responsable</h3>

                                  </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">RUT</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="RUT">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Nombre</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Apellido</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Apellido">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Telefono</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Telefono">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Dirección</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Dirección">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Correo</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo">
                                    </div>

                                </div>
                            </div>
                            <div class="step-22">

                            </div>

                        </div>
                        <br>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Guardar y continuar</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">


                        <div class="step33">



            <div class="container kv-main">
              <form enctype="multipart/form-data">

                  <div class="form-group">

                      <input id="file-5" class="file" type="file" multiple data-preview-file-type="any" data-upload-url="#">
                  </div>
              </form>
                <hr>
              </div>

             </div>

                        <br>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Guardar y continuar</button></li>
                        </ul>
                    </div>

                    <div class="tab-pane" role="tabpanel" id="complete">
                          <h3>Completado!</h3>
                        <input type="submit" class="btn btn-primary btn-info-full next-step" name="" value="Subir">


                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
    </div>
   </div>

  <script src="http://localhost:8000/js/jquery.js"></script>




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
