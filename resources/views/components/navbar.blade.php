<nav class="navbar navbar-expand-md navbar-light shadow-sm bg-custom-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">App Name</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" 
            aria-label="{{ __('Toggle navigation') }}"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link @if (isset($title) && $title === 'Home') active @endif" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (isset($title) && $title === 'Recipes') active @endif" href="/recipes">Recipes</a>
                </li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto d-flex gap-2 zjustify-content-sm-start flex-xxl-row align-items-center">
                <!-- Authentication Links -->
                <li class="nav-item">
                    <a class="nav-link @if (isset($title) && $title === 'Search') active @endif" href="/search" role="button" aria-label="Search" v-pre>
                        <i class="bi bi-search" style="font-size: 1.2rem;"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    @guest
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Current user" v-pre>
                            <i class="bi bi-person-circle" style="font-size: 1.2rem;"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <div class="dropdown-item-text py-0">Guest</div>
                            <hr class="dropdown-divider">
                            @if (Route::has('login'))
                                <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif
                            @if (Route::has('register'))
                                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </div>
                    @else
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <div class="dropdown-item-text py-0">
                                <small>{{Auth::user()->name}}</small>
                                <small class="text-muted">{{Auth::user()->email}}</small>
                            </div>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="/my-recipes">My recipes</a>
                            <a class="dropdown-item" href="/create">Create recipe</a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="/profile">Edit profile</a>
                            <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                               Log out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    @endguest
                </li>
            </ul>
        </div>
    </div>
</nav>