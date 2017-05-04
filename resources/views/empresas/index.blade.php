@extends('main')

@yield('title', '| Empresas')

@section('content')

    <div class="page-header">
        <h1>Empresas</h1>
      </div>

      <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                <h3 class="panel-title">Lista de Empresas</h3>
                <a href="{{ route('empresas.create') }}" class="btn btn-xs btn-success" style="float:right; margin-top:-19px;">Crear Empresa</a>
                </div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($empresas as $empresa)
                                <tr>
                                    <td><img src="{{ $empresa->foto }}" width="60px" height="60px" /> </td>
                                    <td>{{ $empresa->name }}</td>
                                    <td>{{ $empresa->Direccion }}</td>
                                    <td>{{ $empresa->telefono }}</td>
                                    <td>{{ $empresa->email }}</td>
                                    <td>
                                        
                                        {!! Html::linkRoute('empresas.show', 'Ver', array($empresa->id), array('class' => 'btn btn-danger btn-xs')) !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
          </div>
      </div>

@stop