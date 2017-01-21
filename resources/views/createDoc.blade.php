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

    {!! Form::open(array('url'=>'subirdoc','method'=>'POST', 'files'=>true)) !!}


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










  <div class="container">
    <div class="row">
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
                                  <i class="glyphicon glyphicon-pencil"></i>
                              </span>
                          </a>
                      </li>
                      <li role="presentation" class="disabled">
                          <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Paso 3">
                              <span class="round-tab">
                                  <i class="glyphicon glyphicon-picture"></i>
                              </span>
                          </a>
                      </li>

                      <li role="presentation" class="disabled">
                          <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Completar">
                              <span class="round-tab">
                                  <i class="glyphicon glyphicon-ok"></i>
                              </span>
                          </a>
                      </li>
                  </ul>
              </div>


                  <div class="tab-content">
                    <!--PASO 1  -->
                      <div class="tab-pane active" role="tabpanel" id="step1">
                          <h3>Documento</h3>
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

                              {{ Form::textarea('asunto', null, ['size' => '30x2']) }}
                        </div>
                        <div class="col-md-6">
                          <label for="">Tipo de solicitante</label>
                            <select class="form-control" name="tipoSolicitante">
                              <option value="Institucion">Institucion</option>
                              <option value="Empresa">Empresa</option>
                              <option value="Particular">Particular</option>
                            </select>
                        </div>
                          <ul class="list-inline pull-right">
                                  <br><br>
                              <li><button type="button" class="btn btn-primary next-step">Guardar y continuar</button></li>
                          </ul>
                      </div>
                      <!-- PASO 2 -->
                      <div class="tab-pane" role="tabpanel" id="step2">
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
                          <ul class="list-inline pull-right">
                              <br><br>
                              <li><button type="button" class="btn btn-default prev-step">Atras</button></li>

                              <li><button type="button" class="btn btn-primary next-step">Guardar y continuar</button></li>
                          </ul>
                      </div>

                      <!-- PASO 3  -->
                      <div class="tab-pane" role="tabpanel" id="step3">




                          <div class="control-group">
                            <div class="controls">
                            {!! Form::file('images[]', array('multiple'=>true)) !!}
                      	<p class="errors">{!!$errors->first('images')!!}</p>
                      	@if(Session::has('error'))
                      	<p class="errors">{!! Session::get('error') !!}</p>
                      	@endif
                           </div>
                      </div>
                      {!! Form::submit('Submit', array('class'=>'send-btn')) !!}
                      {!! Form::close() !!}












                          <ul class="list-inline pull-right">
                              <li><button type="button" class="btn btn-default prev-step">Atras</button></li>


                              <li><button type="button" class="btn btn-primary btn-info-full next-step">Listo</button></li>
                          </ul>
                      </div>
                      <div class="tab-pane" role="tabpanel" id="complete">
                          <h3>Completado</h3>
                          <p>Ha completado satisfactoriamente todos los paso</p>
                      </div>
                      <div class="clearfix"></div>
                  </div>

          </div>
      </section>
     </div>
  </div>




  </form>










  <script>
          Dropzone.options.myDropzone = {
              autoProcessQueue: false,
              uploadMultiple: true,
              maxFilezise: 10,
              maxFiles: 2,

              init: function() {
                  var submitBtn = document.querySelector("#submit");
                  myDropzone = this;

                  submitBtn.addEventListener("click", function(e){
                      e.preventDefault();
                      e.stopPropagation();
                      myDropzone.processQueue();
                  });
                  this.on("addedfile", function(file) {
                      alert("file uploaded");
                  });

                  this.on("complete", function(file) {
                      myDropzone.removeFile(file);
                  });

                  this.on("success",
                      myDropzone.processQueue.bind(myDropzone)
                  );
              }
          };
      </script>





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
