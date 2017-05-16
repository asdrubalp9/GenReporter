@extends('main')

@section('title', 'Crear Usuario')

@section('stylesheets')

    {!! Html::style('/css/parsley.css') !!}

@stop

@section('content')

<div class="row">    
        <div class="page-header">
            <h1>Crear Usuario</h1>
      </div>
</div>

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            
            <div class="panel-body">
                {!! Form::open( ['route'=> 'users.store','method'=>'POST', 'data-parsley-validate'=>''] ) !!}

                    {!! Form::hidden('empresa_id', Auth::guard('empresa')->user()->id ) !!}
                    {!! Form::label('name', 'Nombres: ') !!}
                    {!! Form::text('name', null, ['class'=> 'form-control', 'required'=>'']) !!}
                    {!! Form::label('lastName', 'Apellidos: ') !!}
                    {!! Form::text('lastName', null, ['class'=> 'form-control','required'=>'']) !!}
                    {!! Form::label('telefono', 'Telefono: ') !!}
                    {!! Form::number('telefono', null, ['class'=> 'form-control']) !!}
                    {!! Form::label('email', 'Email: ') !!}
                    {!! Form::email('email', null, ['class'=> 'form-control','required'=>'']) !!}
                    {!! Form::label('login', 'Login: ') !!}
                    {!! Form::text('login', null, ['class'=> 'form-control','required'=>'']) !!}
                    {!! Form::label('password', 'Contraseña: ') !!}
                    {!! Form::text('password', null, ['class'=> 'form-control','required'=>'']) !!}
                    
                    {!! Form::label('empresas', 'Sitios asignados') !!}
                    <hr>
                    @foreach($sitios as $sitio) 
                        {!! Form::label('empresas', $sitio->name) !!}
                        {!! Form::checkbox('empresas', $sitio->value ) !!}

                    @endforeach
                    <hr>
                    {!! Form::label('foto', 'Foto: ') !!}
                    {!! Form::file('image'); !!}
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            {!! Form::submit('Crear Usuario', ['class'=>'btn btn-block btn-primary'])  !!}
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