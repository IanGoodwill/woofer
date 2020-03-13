<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
    
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="navbar-brand" href="{{ route( 'posts.index') }}">
            Index
            </a>
        </li>
        @auth
        <li class="nav-item">
        <a class="navbar-brand" href="{{ route( 'posts.create') }}">
            Create Post
            </a>
        </li>

        <li class="nav-item">
        <a class="navbar-brand" href="{{ route( 'profiles.create') }}">
            Profile
            </a>
        </li>
        
        <li class="nav-item">
        <a class="navbar-brand" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>

        <form id="logout-form" action="{{ route('logout') }}"       method="POST" style="display: none;">
                {{ csrf_field() }}
        </form>
        </li>
        @endauth
        @guest
        <li class="nav-item">
        <a class="navbar-brand" href="{{ route( 'login') }}">
            Login
            </a>
        </li>

        <li class="nav-item">
        <a class="navbar-brand" href="{{ route( 'register') }}">
            Register
            </a>
        </li>
        @endauth
    </ul>
</nav>