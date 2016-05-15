<!Doctype html>
<html>
    <head>
        <link href="{{ asset('bower_components/Materialize/dist/css/materialize.min.css') }}" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <nav class="@yield('header-class')">
            @if (Auth::user())
                @include('partials.menu')
            @else
                @include('partials.auth_menu')
            @endif
        </nav>
        <div class="container ">
            @yield('content')
        </div>
        <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('bower_components/Materialize/dist/js/materialize.min.js') }}"></script>
    </body>
</html>