@extends('admin.main')
@section('title', 'Listado de Etiquetas')
@section('content')
    <a href="{{route('tags.create')}}" class="btn btn-success">Registrar Etiqueta</a>
    {!! Form::open(['route' => 'tags.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>ACCION</th>
        </tr>
        </thead>
        <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>{{$tag -> id}}</td>
                    <td>{{$tag -> name}}</td>
                    <td><a href="{{route('admin.tags.delete', $tag -> id)}}" class="btn btn-danger">Borrar</a>
                        <a href="{{route('tags.edit', $tag)}}" class="btn btn-warning">Editar</a> </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <div class="input-group">
        {!! Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Buscar tag...
        ','aria-decribeby' => 'search']) !!}
        <span class="glyphicon-search" id="search"></span>
    </div>
    {!! $tags -> render() !!}
    {!! Form::close() !!}

@endsection