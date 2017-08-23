@extends('admin.main')
@section('title', 'Listado de imagenes')
@section('content')
    <div class="row">
        @foreach($images as $image)
            <div class="col-md-4">
                <div class="panel panel-default panel_imagen">
                    <div class="panel-body">
                        <img src="{{asset('images/articles/'.$image -> nombre)}}" class="img-responsive img_images">
                    </div>
                </div>
                <div class="panel-footer">{{$image -> nombre}}</div>
            </div>
        @endforeach
    </div>
@endsection