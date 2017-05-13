@extends('main')

@section('title', '| Mostrar Empresa')

@section('content')

<h1>EMPRESA: {{ $empresa->name }} </h1>

<div class="row">
        <div class="col-sm-6">
            <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Datos de {{ $empresa->name }}</h3>
              <a href="{{ route('empresas.edit', $empresa->id )  }}" class="btn btn-xs btn-success" style="float:right; margin-top:-18px;" >Modificar</a>
            </div>
            <div class="panel-body datosUsuario">
                <img src="" width="100px" height="100px" /> 
                    <p>Nombre: {{ $empresa->name }} </p>
                    <p>Correo: {{ $empresa->email }} </p>
                    <p>Telf: {{ $empresa->telefono }} </p>
                    <p>Direccion: {{ $empresa->Direccion }} </p>
                </div>
          </div>
          </div>

          <div class="col-sm-6">
            <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Lugares Asignados</h3>
              <a href="#" class="btn btn-xs btn-success" style="float:right; margin-top:-18px;" >Asignar lugar</a>
            </div>
                <table class="table table-striped">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Direccion</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td>
                    <a href="#" class="btn btn-xs btn-warning" ><span class="glyphicon glyphicon-pencil"> </span></a>
                    <a href="#" class="btn btn-xs btn-danger" ><span class="glyphicon glyphicon-trash"></span></a>
                </td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Reportes realizados por {{ $empresa->name }}</h3>
            </div>
                <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Lugar del reporte</th>
                <th>Tipo del Reporte</th>
                <th>Tipo del Reporte</th>
                <th>Titulo del Reporte</th>
                <th>Detalle</th>
                <th>Segs.</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="#" class="btn btn-xs btn-success" ><span class="glyphicon glyphicon-eye-open"> </span></a></td>
              </tr>
            </tbody>
          </table>
          </div>
    </div>
</div>
</div>

@stop