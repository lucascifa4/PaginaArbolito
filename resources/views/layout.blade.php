<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pagina</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@400;700&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/bef8c7f32f.js" crossorigin="anonymous"></script>
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('css')
         <!-- Carga de jQuery -->
         <!-- jQuery, vinculado directo a cdn de google -->
        
    </head>
    <body class="body">
        <nav class="navbar navbar-expand-lg bg-body-tertiary w-100">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Arbolito
                    </a>
                        <ul class="dropdown-menu slide-bottom">
                            @if(!isset($usuario))
                                <li><a class="dropdown-item" href="{{ route('create.usuarios') }}">Crear Usuario</a></li>
                            @endif
                            @if(!isset($usuario))
                            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalUsuario">
                                Iniciar Sesión
                            </a>
                                @include('modalLogin')
                            @endif
                        </ul>
                    </li>
                </ul>
                @if(isset($usuario))
                <div class="d-flex">
                    Bienvenido {{$usuario->nombre ?? 'invitado'}}
                </div>
                @endif
            </div>
        </nav>
        <div class="content" id="content">         
            @yield('content')
        </div>
        <footer id="footer" class="w-100">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <a class="navbar-brand" href="#" style="padding-left: 20px">Contacto</a>
            </nav>
        </footer>
    </body>
</html>

