@extends('main')

@section('title', 'Crear Usuario')

@section('stylesheets')

    {!! Html::style('/css/parsley.css') !!}

@stop

@section('content')

<div class="row">    
        <div class="page-header">
            <h1>Modificar Usuario</h1>
      </div>
</div>

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            
            <div class="panel-body">
                {!! Form::model( $user, ['route'=> ['users.update', $user->id],'method'=>'PUT'] ) !!}

                    {!! Form::label('name', 'Nombres: ') !!}
                    {!! Form::text('name', null, ['class'=> 'form-control', 'required'=>'']) !!}
                    {!! Form::label('lastName', 'Apellidos: ') !!}
                    {!! Form::text('lastName', null, ['class'=> 'form-control','required'=>'']) !!}
                    {!! Form::label('telefono', 'Telefono: ') !!}
                    {!! Form::number('telefono', null, ['class'=> 'form-control']) !!}
                    {!! Form::label('email', 'Email: ') !!}
                    {!! Form::email('email', null, ['class'=> 'form-control','required'=>'', 'disabled'=> 'true']) !!}
                    {!! Form::hidden('email', null, ['class'=> 'form-control','required'=>'']) !!}
                    {!! Form::label('login', 'Login: ') !!}
                    {!! Form::text('login', null, ['class'=> 'form-control','required'=>'','null', 'disabled'=> 'true']) !!}
                    {!! Form::hidden('login', null, ['class'=> 'form-control','required'=>'','null']) !!}
                    {!! Form::label('password', 'Contraseña: ') !!}
                    {!! Form::text('password', null, ['class'=> 'form-control','required'=>'']) !!}
                    <!--
                    {!! Form::label('claves', 'Sitios: ') !!}
                    {!! Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['class' => 'form-control'], ['multiple' => true]) !!}
                    -->
                    {!! Form::label('foto', 'Foto: ') !!}
                    {!! Form::file('image'); !!}
                    
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            {!! Form::submit('Modificar', ['class'=>'btn btn-block btn-primary'])  !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Html::linkRoute('users.show', 'Cancelar', array($user->id), array('class' => 'btn btn-danger btn-block')) !!}    
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
