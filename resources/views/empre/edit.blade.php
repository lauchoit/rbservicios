@extends('plantillas.main')

@section('title', 'Registrar Empresa')
@section('link')

@stop

@section('tituloPagina')
	Registro de Empresa
@stop
@section('arribaDerecha')
		
@stop
@section('subtituloPagina')
	Datos de registro
@stop
@section('contenido')
	
	<div class="x_content">

    {!! Form::open(['route'=>['empre.update', $empre], 'method'=>'PUT', 'class'=>'form-horizontal form-label-left']) !!}

      <div class="item form-group">
        {!! Form::label('name', 'Nombre *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('name', $empre->name, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('RIF', 'RIF *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('RIF', $empre->RIF, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('direccion', 'direccion *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('direccion', $empre->direccion, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('telefono', 'Telefono *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('telefono', $empre->telefono, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('descripcion', 'Descripcion *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::textarea('descripcion', $empre->descripcion, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <input type="reset" class='btn btn-primary'></input>
          {!! Form::submit('ACTUALIZAR', ['class'=>'btn btn-success']) !!}
        </div>
      </div>
    {!! Form::close() !!}
  </div>

@stop

@section('script')

@stop
@section('content')

@stop