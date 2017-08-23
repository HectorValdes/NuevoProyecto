@extends('admin.main')
@section('title', 'Crear usuario')
@section('content')




    {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre(s)') !!}
            {!! Form::text('name', null,['class' => 'form-control', 'placeholder' => 'Nombre Completo']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', null,['class' => 'form-control', 'placeholder' => 'example@gmail.com']) !!}`
        </div>
        <div class="form-group">
            {!! Form::label('pass', 'Contrasena') !!}
            {!! Form::password('pass', ['class' => 'form-control', 'placeholder' => '**************']) !!}`
        </div>
        <div class="form-group">
            {!! Form::label('type', 'Tipo') !!}
            {!! Form::select('type',['member' => 'Miembro','admin' => 'Administrador'], null,['class' => 'form-control']) !!}`
        </div>
    <div class="form-group">
        {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}`
    </div>

    {!! Form ::close()!!}
@endsection