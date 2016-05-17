<li class="">
    <img src="{{ asset('assets/img/logo.png') }}" class="side-nav__logo" />
</li>
<li>
    <a href="#">Dashboard</a>
</li>
<li>
    <a href="{{ action('ArticlesController@index') }}">Articles</a>
</li>
<li>
    <a href=" {{ action('UsersController@index')  }} ">Users</a>
</li>
<li>
    <a href=" {{ action('ProjectsController@index') }}">Projects</a>
</li>