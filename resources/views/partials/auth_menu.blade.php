<div class="nav-wrapper darken-custom">
    <a href="#!" class="brand-logo">
        <img src="{{ asset('assets/img/logo.png') }}" class="logo" />
    </a>
    <ul class="right hide-on-med-and-down">
        <li><a href="{{ action('Auth\AuthController@getLogin') }}">Login</a></li>
        <li><a href="{{ action('Auth\AuthController@getRegister') }}">Registration</a></li>
    </ul>
</div>