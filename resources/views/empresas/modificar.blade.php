@extends('main')

@section('title', '| Modificar Empresa')

@section('stylesheets')

    {!! Html::style('/css/parsley.css') !!}

@stop

@section('content')

<div class="row">    
        <div class="page-header">
            <h1>Modificar Empresa</h1>
      </div>
</div>

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            
            <div class="panel-body">
                {!! Form::model( $empresa, ['route'=> ['empresas.update', $empresa->id],'method'=>'PUT'] ) !!}

                    {!! Form::label('name', 'Nombre de la empresa: ') !!}
                    {!! Form::text('name', null, ['class'=> 'form-control', 'required'=>'']) !!}
                    
                    {!! Form::label('telefono', 'Telefono: ') !!}
                    {!! Form::number('telefono', null, ['class'=> 'form-control', 'required'=>'']) !!}

                    
                    {!! Form::hidden('email', null, ['class'=> 'form-control','required'=>'']) !!}

                    {!! Form::label('direccion', 'Direccion: ') !!}
                    {!! Form::text('Direccion', null, ['class'=> 'form-control','required'=>'']) !!}
                    
                    {!! Form::label('password', 'Contraseña: ') !!}
                    {!! Form::text('password', null, ['class'=> 'form-control','required'=>'']) !!}
                    
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            {!! Form::submit('Modificar', ['class'=>'btn btn-block btn-primary'])  !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Html::linkRoute('empresas.show', 'Cancelar', array($empresa->id), array('class' => 'btn btn-danger btn-block')) !!}    
                        </div>
                    </div>
                    
                    
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
