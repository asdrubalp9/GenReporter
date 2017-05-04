@extends('main')

@yield('title', '| Usuarios')

@section('content')

    <div class="page-header">
        <h1>Usuarios</h1>
      </div>

      <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                <h3 class="panel-title">Lista de Usuarios</h3>
                <a href="{{ route('users.create') }}" class="btn btn-xs btn-success" style="float:right; margin-top:-19px;">Crear Usuario</a>
                </div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Login</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td><img src="{{ $user->foto }}" width="60px" height="60px" /> </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->lastName }}</td>
                                    <td>{{ $user->telefono }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->login }}</td>
                                    <td>
                                        
                                        {!! Html::linkRoute('users.show', 'Ver', array($user->id), array('class' => 'btn btn-danger btn-xs')) !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
          </div>
      </div>

@stop