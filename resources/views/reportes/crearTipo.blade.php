@extends('main')

@section('title', 'Crear Reporte')

@section('content')

<div class="row">    
        <div class="page-header">
            <h1>Crear Tipo de Reporte</h1>
      </div>
</div>

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            
            <div class="panel-body">
                {!! Form::open( ['route'=> 'reportes.submitType','method'=>'POST', 'data-parsley-validate'=>''] ) !!}
                    
                    {!! Form::hidden('Empresa_id', Auth::guard('empresa')->user()->id  ) !!}

                    {!! Form::label('titulo', 'Titulo: ') !!}
                    {!! Form::text('titulo', null, ['class'=> 'form-control']) !!}
                    
                    {!! Form::label('descripcion', 'Descripcion: ') !!}
                    {!! Form::textArea('descripcion', null, ['class'=> 'form-control']) !!}
                    
                    <br>
                    {!! Form::submit('Crear Reporte', ['class'=>'btn btn-block btn-primary'])  !!}
                {!! Form::close() !!}
            </div>
          </div>
    </div>
</div>
@stop