<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('template/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('template/css/heroic-features.css')}}" rel="stylesheet">

</head>

<body>

<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                @if(Auth::user())
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">{{Auth::user()->name}}</a>
                    </li>
                 @else

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Register</a>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>





<!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <h1 class="display-3">A Warm Welcome!</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
    </header>



    <!-- Page Features -->
    <div class="row text-center">
        @foreach($articles as $article)
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">

                    @foreach($article->images as $image)
                        <img class="card-img-top" src={{asset('images/articles/'.$image->nombre)}} alt="">
                    <div class="card-body">

                        <h4 class="card-title">{{$article -> title}}</h4>
                        <a href="{{route('front.search.category', $article->category->name)}}">{{$article->category->name}}</a>
                    </div>
                    <div class="pull-right">
                        {{$article -> created_at->diffForHumans()}}
                    </div>
                    <div class="card-footer">
                        <a href="{{route('front.view.article', $article->slug)}}" class="btn btn-primary">Find Out More!</a>
                    </div>
                    @endforeach
                </div>
            </div>
        @endforeach

    </div>
    <!-- /.row -->

</div>

    <div class="_aside">
        @include('partials.aside')

    </div>






<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('template/vendor/popper/popper.min.js')}}"></script>
<script src="{{asset('template/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

</body>

</html>
