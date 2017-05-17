@extends('main')

@section('title', 'Crear Reporte')

@section('content')

<div class="row">    
        <div class="page-header">
            <h1>Crear Reportes</h1>
      </div>
</div>

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            
            <div class="panel-body">
                {!! Form::open() !!}
                    <div class="row">
                        <div class="col-md-6">
                            <label>
                                Sitio
                            </label>
                            <select class="form-control">
                                @foreach($sitios as $sitio)
                                    <option value="{{ $sitio->id }} ">{{ $sitio->name }}</option>
                                @endforeach    
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>
                                Tipo de reporte
                            </label>
                            <select class="form-control">
                                @foreach($tipos as $tipo)
                                    <option value="{{ $tipo->id }} ">{{ $tipo->titulo }}</option>
                                @endforeach    
                            </select>
                        </div>
                    </div>
                    {!! Form::label('Titulo', 'Titulo: ') !!}
                    {!! Form::text('Titulo', null, ['class'=> 'form-control']) !!}
                    
                    {!! Form::label('Descripcion', 'Descripcion: ') !!}
                    {!! Form::textArea('Descripcion', null, ['class'=> 'form-control']) !!}
                    {!! Form::file('image'); !!}
                    <br>
                    {!! Form::submit('Crear Reporte', ['class'=>'btn btn-block btn-primary'])  !!}
                {!! Form::close() !!}
            </div>
          </div>
    </div>
</div>
@stop