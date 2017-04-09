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
  <div class="col-md-8">
            <div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
  </div>
  <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">Total Documentos</div>
            <div class="panel-body">
                <div id="container3"></div>
            </div>
        </div>
    </div>
</div>


<!-- - -->







<script src="js/highcharts.js"></script>
<script src="js/graficas.js"></script>
  <script src="js/sistemalaravel.js"></script>




<script type="text/javascript">

</script>


@stop
