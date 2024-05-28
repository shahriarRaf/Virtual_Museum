

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
       {{--  <a class="navbar-brand" href="#">{{ config('app.name') }}</a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}" aria-current="page" href="{{ route('gallery') }}">GALLERY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" aria-current="page" href="{{ route('about') }}">ABOUT</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">LOGOUT</a>
                </li>
                @else
                {{-- <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('registration') ? 'active' : '' }}" href="{{ route('registration') }}">REGISTRATION</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">LOGIN</a>
                </li>
                @endauth
            </ul>
            <span class="navbar-text">
                @auth
                    {{ auth()->user()->name }}
                @endauth
            </span>
        </div>
    </div>
</nav>
