@extends('admin.main')
@section('title', 'Crear Categoria')
@section('content')
    {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'nombre de categoria', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Registrar Categoria', ['class' => 'btn btn-primary']) !!}`
        </div>
    {!! Form::close() !!}
@endsection