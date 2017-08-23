@extends('admin.main')
@section('title', 'Editar Categoria')
@section('content')
    {!! Form::open(['route' => ['tags.update', $tag], 'method' => 'PUT']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', $tag -> name, ['class' => 'form-control', 'placeholder' => 'nombre de categoria', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Editar Etiqueta', ['class' => 'btn btn-primary']) !!}`
    </div>
    {!! Form::close() !!}
@endsection