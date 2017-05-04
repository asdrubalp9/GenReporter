@extends('main')

@section('title', 'Crear Empresas')

@section('stylesheets')

    {!! Html::style('/css/parsley.css') !!}

@stop

@section('content')

<div class="row">    
        <div class="page-header">
            <h1>Crear Empresas</h1>
      </div>
</div>

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            
            <div class="panel-body">
                {!! Form::open( ['route'=> 'empresas.store', 'method'=>'PUT', 'data-parsley-validate'=>''] ) !!}

                    {!! Form::label('name', 'Nombre de la empresa: ') !!}
                    {!! Form::text('name', null, ['class'=> 'form-control', 'required'=>'']) !!}
                    
                    {!! Form::label('telefono', 'Telefono: ') !!}
                    {!! Form::number('telefono', null, ['class'=> 'form-control', 'required'=>'']) !!}

                    {!! Form::label('email', 'Email: ') !!}
                    {!! Form::email('email', null, ['class'=> 'form-control','required'=>'']) !!}

                    {!! Form::label('direccion', 'Direccion: ') !!}
                    {!! Form::text('direccion', null, ['class'=> 'form-control','required'=>'']) !!}
                    
                    {!! Form::label('password', 'Contraseña: ') !!}
                    {!! Form::text('password', null, ['class'=> 'form-control','required'=>'']) !!}
                    
                    
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            {!! Form::submit('Crear Empresa', ['class'=>'btn btn-block btn-primary'])  !!}
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('users.index') }}" class="btn btn-block btn-danger">Cancelar</a>
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