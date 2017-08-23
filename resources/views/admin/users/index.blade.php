@extends('admin.main')
@section('title', 'Usuarios')
@section('content')
    <a href="{{route('users.create')}}" class="btn btn-success">Registrar usuario</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>TIPO DE USUARIO</th>
            <th>ACCION</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user -> id}}</td>
                    <td>{{$user -> name}}</td>
                    <td>{{$user -> email}}</td>
                    <td>{{$user -> type}}</td>
                    <td><a href="{{route('admin.users.delete', $user -> id)}}" class="btn btn-danger">Borrar</a>
                        <a href="{{route('users.edit', $user)}}" class="btn btn-warning">Editar</a> </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $users -> render()!!}

@endsection
