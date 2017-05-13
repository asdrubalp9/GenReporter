@extends('main')

@section('title', 'Crear Sitio')

@section('stylesheets')

    {!! Html::style('/css/parsley.css') !!}

@stop

@section('content')

<div class="row">    
        <div class="page-header">
            <h1>Crear Sitio</h1>
      </div>
</div>

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            
            <div class="panel-body">
                {!! Form::open( ['route'=> 'sitios.store','method'=>'POST', 'data-parsley-validate'=>''] ) !!}

                    {!! Form::hidden('Empresa_id', Auth::guard('empresa')->user()->id  ) !!}
                    
                    {!! Form::label('name', 'Nombres: ') !!}
                    {!! Form::text('name', null, ['class'=> 'form-control', 'required'=>'']) !!}
                    
                    {!! Form::label('direccion', 'Direccion: ') !!}
                    {!! Form::text('direccion', null, ['class'=> 'form-control']) !!}
                    
                    <br>
                    {!! Form::submit('Crear Sitio', ['class'=>'btn btn-block btn-primary'])  !!}
                {!! Form::close() !!}
            </div>
          </div>
    </div>
</div>
@stop

@section('javas')
    <script src="/js/parsley.min.js"></script>
    <script>
        $('#form').parsley();
    </script>
@stop