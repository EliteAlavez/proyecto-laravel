 
    <!DOCTYPE html>
    <html lang="es">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Elecciones</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    
    </head>
    
    <body>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <div class="container-fluid">
            <!-- BARRA NAVEGACIÓN -->
            <div class="bg-light">
                <nav class="navbar navbar-expand-md navbar-light bg-light border-3 border-bottom border-primary px-5">
                    <div class="container-fluid">
                        <a href="#" class="navbar-brand">Elecciones 2022</a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#MenuNavegacion">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
    
                    <div id="MenuNavegacion" class="collapse navbar-collapse">
                        <ul class="navbar-nav ms-3">
    
    
                            <li class="nav-item dropdown dx-1">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                    Casilla
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('casilla.create') }}">Registrar</a></li>
                                    <li><a class="dropdown-item" href="{{ route('casilla.index') }}">Listar</a></li>
                                </ul>
                            </li>
    
                            <li class="nav-item dropdown dx-1">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                    Candidato
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('candidato.create') }}">Crear</a></li>
                                    <li><a class="dropdown-item" href="{{ route('candidato.index') }}">Listar</a></li>
                                </ul>
                            </li>
    
                            <li class="nav-item dropdown dx-1">
                                <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown">
                                    Eleccion
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('eleccion.create') }}">Crear</a></li>
                                    <li><a class="dropdown-item" href="{{ route('eleccion.index') }}">Listar</a></li>
                                </ul>
                            </li>
    
                            <li class="nav-item dropdown dx-1">
                                <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown">
                                    Voto
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('voto.create') }}">Crear</a></li>
                                    <li><a class="dropdown-item" href="{{ route('voto.index') }}">Listar</a></li>
                                    <li><a class="dropdown-item" href="/graphics">Gráficas</a></li>
                                </ul>
                            </li>
    
    
                        </ul>
    
                        <ul class="navbar-nav ms-3">
                            <li class="nav-item">
                                <a class="nav-link text-nowrap" href="/login/">Iniciar sesión</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
    
            <header>
                <div class="row">
                    <div class="col-md-2">
                        <img src="/resources/images/tecnm.png" width="200px" alt="TecNM">
                    </div>
                    <div class="col-md-8 text-center">
                        <h1>Instituto Tecnológico del Valle de Oaxaca</h1>
                        <h5>Elección de la reina ITVO</h5>
                    </div>
                    <div class="col-md-2">
    
                    </div>
    
                </div>
            </header>
            <div class="container">
                @yield('content')
            </div>
            <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    </body>
    
    </html>