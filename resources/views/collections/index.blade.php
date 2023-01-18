<x-app title="My Collections">
    <x-navbar></x-navbar>

    <div class="container p-5">
        <div class="row">
            <div class="col-4">
                <x-sidebar></x-sidebar>
            </div>
            <div class="col">
                @if ($collections->count() > 0)
                    <div class="card border-0 bg-white rounded-4">
                        <div class="card-body p-4">
                            <h4 class="mb-4">My Collections</h4>

                            @foreach ($collections as $collection)
                                <a type="button" href="{{ route('collections.show', $collection) }}"
                                    class="card collection-card rounded-4 text-decoration-none text-dark mb-3">
                                    <div class="card-body p-4">
                                        <h5 class="fw-semibold">{{ $collection->name }}</h5>
                                        <small>{{ $collection->recipes->count() }} recipes</small>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="card border-0 bg-light rounded-4">
                        <div class="card-body p-5 text-muted text-center">
                            <h5>No collections found</h5>
                            <span>You haven't saved any recipe yet</span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app>
