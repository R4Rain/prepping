<nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid py-1">
        <a class="navbar-brand me-5" href="{{ route('home') }}">
            <img src="/storage/assets/logo-text.png" alt="prepping" width="130">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('recipes.index') }}">Explore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('courses.index') }}">Learn to Cook</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('communities.index') }}">Community</a>
                </li>
            </ul>

            @if (auth()->check())
                <div class="d-flex flex-column flex-md-row gap-3">
                    <div class="dropdown">
                        <a class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            Create
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end border-0 p-1 shadow-sm">
                            <li>
                                <a href="{{ route('recipes.create') }}" type="button"
                                    class="dropdown-item p-2 rounded-3">
                                    {{ __('Recipe') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('communities.create') }}" type="button"
                                    class="dropdown-item p-2 rounded-3">
                                    {{ __('Community') }}
                                </a>
                            </li>
                        </ul>
                    </div>

                    <a href="{{ route('recipes.manage') }}" class="btn btn-light rounded-3" type="button">
                        <i class="bi bi-person-fill me-1"></i> {{ auth()->user()->name }}
                    </a>
                </div>
            @else
                <div class="d-flex flex-column flex-md-row gap-3">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#login">
                        Log in
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#register">
                        Sign up
                    </button>
                </div>
            @endif
        </div>
    </div>
</nav>
