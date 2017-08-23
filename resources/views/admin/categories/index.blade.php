@extends('admin.main')
@section('title', 'Listado de Categorias')
@section('content')
    <a href="{{route('categories.create')}}" class="btn btn-success">Registrar categoria</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>ACCION</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{$category -> id}}</td>
                <td>{{$category -> name}}</td>
                <td><a href="{{route('admin.categories.delete', $category -> id)}}" class="btn btn-danger">Borrar</a>
                    <a href="{{route('categories.edit', $category)}}" class="btn btn-warning">Editar</a> </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $categories -> render() !!}

@endsection