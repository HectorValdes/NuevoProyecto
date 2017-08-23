@extends('admin.main')
@section('title', 'Editar Categoria')
@section('content')
    {!! Form::open(['route' => ['categories.update', $category], 'method' => 'PUT']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', $category -> name, ['class' => 'form-control', 'placeholder' => 'nombre de categoria', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Editar Categoria', ['class' => 'btn btn-primary']) !!}`
    </div>
    {!! Form::close() !!}
@endsection