<!Doctype html>
<html>
    <head>
        <link href="{{ asset('bower_components/Materialize/dist/css/materialize.min.css') }}" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        @if (Auth::user())
            <div class="navbar-fixed">
                <nav class="@yield('header-class')">
                        @include('partials.menu')
                </nav>
            </div>
        @else
            <div>
                <nav class="big-header waves-effect waves-light">
                    @include('partials.auth_menu')
                </nav>
            </div>
        @endif

        <div class="container">
            @yield('content')
        </div>
        <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('bower_components/Materialize/dist/js/materialize.min.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
    </body>
</html>