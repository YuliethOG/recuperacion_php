<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MEDICODE</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>

    </style>
</head>
<body class="">
    <nav class=" has-background-primary navbar" role="navigation" aria-label="main navigation">

        <div class="navbar-brand">
          <a class="navbar-item is-size-3 is-italic has-text-weight-bold" href="{{ url('/home') }}">
                  MEDICODE
                </a>
        </div>
        @if (Auth::check())

        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a href="{{ route('pacientes.index') }}"class="navbar-item">
              Pacientes
            </a>

            <a href="{{ route('formula.index') }}" class="navbar-item">
              Formula Medica
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                Medicamentos
              </a>

              <div class="navbar-dropdown">
                <a href="{{ route('medicamentos.index') }}"class="navbar-item">
                  Medicamentos
                </a>
                <a  href="{{ route('categorias.index') }}"class="navbar-item">
                  Categorías
                </a>
              </div>
            </div>
          </div>
          @endif
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
                @guest
                @if (Route::has('login'))

                        <a class="button is-info is-light nav-link " href="{{ route('login') }}">{{ __('Inicio de sesión') }}</a>

                @endif

                @if (Route::has('register'))

                        <a class="button is-info is-light nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>

                @endif
            @else
                    <div class="">
                        <a class="" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Cerrar sesión') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
            @endguest
              </div>
            </div>
          </div>
        </div>
      </nav>

      <main >

        @yield('content')

    </main>
    @yield('script')
    
    </body>
</html>
