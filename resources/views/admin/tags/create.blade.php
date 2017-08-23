@extends('admin.main')
@section('title', 'Crear Etiqueta')
@section('content')
    {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'nombre de etiqueta', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Registrar Etiqueta', ['class' => 'btn btn-primary']) !!}`
    </div>
    {!! Form::close() !!}
@endsection