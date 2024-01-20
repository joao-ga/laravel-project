<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar-header">
                <div class="conteiner" id="navbar">
                    <ul class="main-list">
                        <a href="/" class="navbar-brand">
                        <img src="/img/logo.svg" alt="logo-events">
                        </a>
                        <li class="item">
                            <a href="/" class="nav-">Eventos</a>
                        </li>
                        <li class="item">
                            <a href="/events/create" class="nav-">Criar Eventos</a>
                        </li>
                        @auth
                        <li class="item">
                            <a href="/dashboard" class="nav-">Meus Eventos</a>
                        </li>
                        <li class="item">
                           <form action="/logout" method="POST">
                                @csrf
                                <a href="/logout" class="nav-link" onclick="event.      	
                                        preventDefault();
                                        this.closest('form').submit();"
                                >Sair</a>
                           </form>
                        </li>
                        @endauth
                        @guest
                        <li class="item">
                            <a href="/login" class="nav-">Entrar</a>
                        </li>
                        <li class="item">
                            <a href="/register" class="nav-">Cadastrar</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>
        <footer>
        <p>Joaoga's Events &copy; 2024</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
        
</html>
