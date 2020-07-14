<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'Hanami') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


    
      





    <div id="app">
    
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/home">
                    {{ config('', 'Hanami') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @if(isset($_COOKIE["id"]))
                            <a class="nav-item nav-link active" href="/perfil">Perfil de Usuario <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" href="/catalogo">Catalogo</a>
                        @endif
                        <a class="nav-item nav-link" href="/contacto">Contacto</a>
                        <a class="nav-item nav-link" href="#" tabindex="-1" >F.A.Q</a>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if(!isset($_COOKIE["id"]))
                            <li class="nav-item">
                                <a class="nav-link" href="login">{{ __('Ingresar') }}</a>
                            </li>
                           
                                <li class="nav-item">
                                    <a class="nav-link" href="registrarse">{{ __('Registrarse') }}</a>
                                </li>
                                
                            
                        @else
                            <li> <a href="/carrito"><img src="/images/carro.png" alt="" width=28px class="mr-3 mt-1"></a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ $_COOKIE["nombre"] }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  
                                    <a class="dropdown-item"  href="home/logout">
                                        {{ __('Salir') }}
                                    </a>
                                    
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            
        </nav>

        <header id="banner">
            <img id="logo" src="images/logoDS.png" alt="Logo de negocio">
            <h1 id="titleHome">
                <span style="color:black">Digital</span>
                <span style="color:white">Store</span>
            </h1>
        </header>

        <main class="py-4">
            @yield('content')
        </main>

       
    </div>
</body>
</html>
