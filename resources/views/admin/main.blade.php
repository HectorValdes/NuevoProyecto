<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>@yield('title','default') | Panel de administrador</title>
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
        <!link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('chosen/chosen.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        @include('partials.nav')
        <section>
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <h1>@yield('title')</h1>
                </div>
                <div class="panel panel-body">
                    @include('partials.errors')<br><br>
                    @include('flash::message')
                    @yield('content')
                </div>
            </div>

        </section>
        <footer>

        </footer>
        <script src="{{asset('jquery/jquery-3.2.1.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
        <script src="{{asset('chosen/chosen.jquery.js')}}"></script>

        @yield('js')

    </body>


</html>