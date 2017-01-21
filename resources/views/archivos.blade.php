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
@if(session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
@endif

{!! Form::open(array('url'=>'archivos','method'=>'POST', 'files'=>true)) !!}
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


@stop
