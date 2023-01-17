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
                            <h3 class="mb-4">My Collections</h3>

                            @foreach ($collections as $collection)
                                <a type="button" href="{{ route('collections.show', $collection) }}"
                                    class="card rounded-4 text-decoration-none text-dark">
                                    <div class="card-body p-4">
                                        <div class="row g-0">
                                            <div class="col">
                                                <h5>{{ $collection->name }}</h5>
                                                <small>{{ $collection->recipes->count() }} recipes</small>
                                            </div>
                                            <div class="col-1 my-auto text-end">
                                                <i class="bi bi-chevron-right"></i>
                                            </div>
                                        </div>
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
