<div class="nav-wrapper light-blue">
    <a href="#!" class="brand-logo">Logo</a>
    <ul class="right hide-on-med-and-down">
        <li><a href="{{ action('Auth\AuthController@getLogin') }}">Login</a></li>
        <li><a href="{{ action('Auth\AuthController@getRegister') }}">Registration</a></li>
    </ul>
</div>