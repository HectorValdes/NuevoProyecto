@extends('admin.main')
@section('title', 'Editar Articulos')
@section('content')
    {!! Form::open(['route' => ['articles.update', $article], 'method' => 'PUT', 'files' => true]) !!}
        <div class="form-group">
            {!! Form::label('titulo', 'Titulo') !!}
            {!! Form::text('titulo', $article->title, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Categoria') !!}
            {!! Form::select('category_id', $article->category->name,null,['class' => 'form-control', 'placeholder' => 'seleccione una opcion...
            ', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('contenido', 'Contenido') !!}
            {!! Form::textarea('contenido',$article->content ,['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('imagen', 'Imagen') !!}
            {!! Form::file('imagen') !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Editar Articulo',['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection