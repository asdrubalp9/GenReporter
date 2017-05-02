@extends('main')

@section('title', 'Crear Usuario')

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
                {!! Form::open() !!}
                    {!! Form::label('nombres', 'Nombres y Apellidos: ') !!}
                    {!! Form::text('nombres', null, ['class'=> 'form-control']) !!}
                    {!! Form::label('telefono', 'Telefono: ') !!}
                    {!! Form::number('telefono', null, ['class'=> 'form-control']) !!}
                    {!! Form::label('email', 'Email: ') !!}
                    {!! Form::email('email', null, ['class'=> 'form-control']) !!}
                    {!! Form::label('login', 'Login: ') !!}
                    {!! Form::text('login', null, ['class'=> 'form-control']) !!}
                    {!! Form::label('password', 'Contraseña: ') !!}
                    {!! Form::text('password', null, ['class'=> 'form-control']) !!}
                    {!! Form::label('claves', 'Sitios: ') !!}
                    {!! Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['class' => 'form-control'], ['multiple' => true]) !!}

                    {!! Form::label('foto', 'Foto: ') !!}
                    {!! Form::file('image'); !!}
                    <br>
                    {!! Form::submit('Crear Usuario', ['class'=>'btn btn-block btn-primary'])  !!}
                {!! Form::close() !!}
            </div>
          </div>
    </div>
</div>
@stop