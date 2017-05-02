@extends('main')

@section('title', 'Dashboard')

@section('content')

<div class="row">    
        <div class="page-header">
            <h1>DashBoard</h1>
      </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <a href="#" style="margin-top: 8px;" class="btn btn-block btn-primary">Crear Reporte <span class="glyphicon glyphicon-book"></span> </a>
        <a href="#" class="btn btn-block btn-primary">Crear Usuario <span class="glyphicon glyphicon-user"></span> </a>
    </div>
    <div class="col-sm-8">
        <div class="panel panel-info">
            <div class="panel-heading">
            <form class="navbar-form navbar-right" style=" margin-top: -8px!important;" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Buscar Usuario">
                    </div>
                        <button type="submit" class="btn btn-default">Buscar</button>
                </form>
                <h3 class="panel-title">Ultimos Usuarios</h3>
            </div>
            
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombres</th>
                            <th>Telefono</th>
                            <th>Asignado</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Asdrubal Perez</td>
                            <td>123123123</td>
                            <td>Un Sitio</td>
                            <td></td>

                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Ultimos Reportes</h3>
            </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID reporte</th>
                            <th>Titulo Reporte</th>
                            <th>Contenido</th>
                            <th>Residencia</th>
                            <th>Encargado</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>532</td>
                            <td>Ingreso de persona</td>
                            <td>La persona ha con la cedula ha ingresado...</td>
                            <td>Colina Plaza</td>
                            <td>Asdrubal Perez</td>
                            <td><a href="#" class="btn btn-xs btn-primary" > <span class="glyphicon glyphicon-eye-open"></span> </a> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <div class="col-sm-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Ultimos Seguimientos</h3>
            </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Titulo del Reporte</th>
                            <th>Contenido del Seguimiento</th>
                            <th>Residencia</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Recepcion de encomienda</td>
                            <td>La persona Asdrubal Perez ha retirado la encomienda que se...</td>
                            <td>Colina Plaza</td>
                            
                            <td><a href="#" class="btn btn-xs btn-primary" > <span class="glyphicon glyphicon-eye-open"></span> </a> </td>
                        </tr>
                    </tbody>
                </table>
        </div>
</div>
    </div>
@stop