@extends('layout.plantilla')
@section('pageheader')
<div class="pageheader">
<h2><i class="fa fa-home"></i> Inicio <span>Ingresar Documento</span></h2>
    <div class="breadcrumb-wrapper">
        <span class="label">Estás aquí : </span>
        <ol class="breadcrumb">
            <li><a href="index.html">Inicio</a></li>
            <li class="active">Ingresar Documento</li>
        </ol>
    </div>
</div>
@stop
@section('content')





            <form  method="POST" action="{{ url('subirdoc') }}" >

                                <div class="col-md-12">
                                  <h3>Detalle del documento</h3>
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
                                </div>
                            <div class="col-md-6">
                                <label for="">Nombre del Documento</label>
                                <input type="text" name="nombreDocumento"class="form-control" id="NomDoc" placeholder="Nombre del documento">
                            </div>
                            <div class="col-md-6">
                              <label for="">Tipo de documento</label>
                                <select class="form-control" name="tipoDocumento">
                                  <option value="decreto">Decreto</option>
                                  <option value="oficio">Oficio</option>
                                  <option value="solicitud">Solicitud</option>
                                </select>
                            </div>

                        <div class="row">




                          <div class="col-md-6">
                            <label for="">Departamento</label>
                              {!! Form::select('departamentos',$departamentos,null,['placeholder'=>'Selecciona','id'=>'departamentos','class'=>'form-control']) !!}

                          </div>

                          <div class="col-md-6">
                            <label for="">Unidad</label>

		                              {!! Form::select('unidades',['placeholder'=>'Selecciona'],null,['id'=>'unidades','class'=>'form-control']) !!}
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Asunto</label>
                                <textarea name="asunto" rows="2" cols="35"></textarea>
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
                                        <input name="nombreResponsable" type="email" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
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
                      <div class="col-md-12">
                        <h3>adjuntar archivo</h3>
                      </div>


                      <div class="form-group">
                          <label for="ejemplo_archivo_1" >Adjuntar un archivo</label>
                          <input type="file" id="ejemplo_archivo_1" multiple>

                        </div>



                        </div>
                        <br>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Guardar y continuar</button></li>
                        </ul>
                    </div>

                    <div class="tab-pane" role="tabpanel" id="complete">


                          <input class="btn btn-primary btn-info-full next-step" type="submit" name="" value="Subir">

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
    </div>
   </div>

  <script src="{{asset('js/jquery.js')}}"></script>

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
