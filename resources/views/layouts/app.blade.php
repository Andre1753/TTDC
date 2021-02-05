<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TTDC</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    
</head>
<body>        
        <nav class="navbar navbar-fixed-top navbar-default fazul">
            <div class="container col-md-2">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{!! asset('images/logo.png') !!}" style="width:50px; height:50px;  "  ></a>
            </div>    
            <div class="container col-md-8">
            </div>
            <div class="container col-md-2">
                @guest
                    @if (Route::has('login'))
                        <a style="color:#fffff0" class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                    @endif
                    |        
                    @if (Route::has('register'))
                        <a style="color:#fffff0" class="nav-link" href="{{ route('register') }}">{{ __('Criar conta') }}</a>
                    @endif
                    @else
                        <span>Bem vindo, {{ Auth::user()->name }}!</span>
                        <a style="color:#fffff0" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Desconectar') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>                        
                @endguest
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

    </div>
</body>
<style>
    .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #9C27B0;
    color: white;
    text-align: center;
    }
    body {
        background-color:  #f0f0f0;
        padding: 110px;
    }
    table{
        background-color: lightgray;
    }
    table th{
        background-color: #2e2d2c;
        color:#fff;
    }
    .dir{
        display: inline;
        float: right;
    }
    .fbranco{
        background-color: white;
    }
    .fazul{
        background-color: #22b9b9;
        color: white;
    }
    .fverde{
        background-color: #67f04c5d;
    }
    .flaranja{
        background-color: #ed7e2ee0;
    }
    .famarelo{
        background-color: #f2f545d3;
    }
</style>
</html>
