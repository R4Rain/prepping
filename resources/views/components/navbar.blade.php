<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container-fluid py-1">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="/storage/assets/logo_text.png" alt="Meal2Go" width="130">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                {{-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li> --}}
            </ul>

            @if (auth()->check())
                <div class="d-flex flex-column flex-md-row gap-3">
                    <a href="{{ route('recipes.create') }}" class="btn btn-primary">
                        Create a recipe
                    </a>
                    <div class="dropdown">
                        <a class="btn btn-light" type="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-fill me-1"></i> {{ auth()->user()->name }}
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end border-0 p-1 shadow-sm">
                            <li>
                                <a href="{{ route('recipes.index') }}" type="button"
                                    class="dropdown-item p-2 rounded-3 text-muted">
                                    <i class="bi bi-book me-1"></i> {{ __('My Recipes') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('collections.index') }}" type="button"
                                    class="dropdown-item p-2 rounded-3 text-muted">
                                    <i class="bi bi-heart me-1"></i> {{ __('My Collections') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('subscriptions.index') }}" type="button"
                                    class="dropdown-item p-2 rounded-3 text-muted">
                                    <i class="bi bi-credit-card me-1"></i> {{ __('My Subscription') }}
                                </a>
                            </li>
                            <li>
                                <hr class="m-1">
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" type="button"
                                    class="dropdown-item p-2 rounded-3 text-muted"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
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
