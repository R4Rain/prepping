<div class="card border-0 shadow-sm bg-white rounded-4">
    <div class="card-body p-4">

        <div id="sidebar" class="list-group gap-1">
            <a href="{{ route('recipes.manage') }}"
                class="list-group-item list-group-item-action {{ Request::is('recipes/manage') ? 'fw-bold text-primary' : '' }}">
                Recipes
            </a>
            <a href="{{ route('collections.index') }}"
                class="list-group-item list-group-item-action {{ Request::is('collections') ? 'fw-bold text-primary' : '' }}">
                Collections
            </a>
            <a href="{{ route('subscriptions.index') }}"
                class="list-group-item list-group-item-action {{ Request::is('subscriptions') ? 'fw-bold text-primary' : '' }}">
                Subscriptions
            </a>
            <a href="{{ route('profile') }}"
                class="list-group-item list-group-item-action {{ Request::is('profile') ? 'fw-bold text-primary' : '' }}">
                Profile
            </a>
            <a href="{{ route('logout') }}" type="button" class="list-group-item list-group-item-action"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>
