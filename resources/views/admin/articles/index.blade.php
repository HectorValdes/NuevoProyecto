@extends('admin.main')
@section('title', 'Articulos')
@section('content')
    <a class="btn btn-success" href="{{route('articles.create')}}">Registrar Articulo</a>
    {!! Form::open(['route' => 'articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
    <hr>
    <table class="table table-bordered">
        <thead>
            <th>TITLE</th>
            <th>CONTENT</th>
            <th>CATEGORY</th>
            <th>USER</th>
            <th>ACTION</th>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article -> title}}</td>
                    <td>{{$article -> content}}</td>
                    <td>{{$article -> category -> name}}</td>
                    <td>{{$article -> user -> name}}</td>
                    <td><a class="btn btn-warning" href="{{route('articles.edit', $article)}}">Editar</a>
                        <a class="btn btn-danger" href="{{route('admin.article.delete', $article -> id)}}">Borrar</a> </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    <div class="input-group">
        {!! Form::text('title',null,['class' => 'form-control', 'placeholder' => 'Buscar tag...
        ','aria-decribeby' => 'search']) !!}
        <span class="glyphicon-search" id="search"></span>
    </div>
    {!! $articles -> render() !!}
    {!! Form::close() !!}
@endsection