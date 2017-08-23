@extends('admin.main')
@section('title', 'Crear Articulos')
@section('content')
    {!! Form::open(['route' => 'articles.store', 'method' => 'POST', 'files' => true]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Titulo') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo del Articulo', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Categoria') !!}
            {!! Form::select('category_id', $categories,null,['class' => 'form-control', 'placeholder' => 'seleccione una opcion...
            ', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('contenido', 'Contenido') !!}
            {!! Form::textarea('contenido',null ,['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('tags', 'Tags') !!}
            {!! Form::select('tags',$tags ,null,['class' => 'form-control select_tag', 'multiple','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('image', 'Imagen') !!}
            {!! Form::file('image') !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Agregar Articulo',['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection
@section('js')
    <script>
        $(".select_tag").chosen({

        });
    </script>
@endsection