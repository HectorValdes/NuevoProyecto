<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        @if(Auth::user())
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            @if(Auth::user()->type === 'admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{route('users.index')}}">Usuarios</a>
                </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="{{route('categories.index')}}">Categorias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('tags.index')}}">Etiquetas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('articles.index')}}">Articulos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('images.index')}}">Imagenes</a>
            </li>
        </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Pagina principal</a> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="flase">{{Auth::user()->name}} <span class="caret"></span> </a>
                </li>
                <ul class="dropdown-menu">
                    <li><a href="#">Salir</a> </li>
                </ul>

            </ul>
        @endif
    </div>
</nav>