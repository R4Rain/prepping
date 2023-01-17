<nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid py-1">
        <a class="navbar-brand me-5" href="{{ route('dashboard') }}">
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
                    <a class="nav-link" href="{{ route('courses.manage') }}">Courses</a>
                </li>
            </ul>

            <div class="d-flex flex-column flex-md-row gap-3">
                <div class="dropdown">
                    <a class="btn btn-light" type="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person-fill me-1"></i> {{ auth()->user()->name }}
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end border-0 p-1 shadow-sm">
                        <li>
                            <a href="{{ route('logout') }}" type="button" class="dropdown-item p-2 rounded-3"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
