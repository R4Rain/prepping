<x-app title="My Collections">
    <div class="container p-5">

        <div class="row">
            <div class="col-4">
                <div class="card border-0 bg-light rounded-4 h-100">
                    <div class="card-body p-4">
                        <h3>My collections</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                @forelse ($collections as $collection)
                    <a type="button" href="{{ route('collections.show', $collection) }}"
                        class="card border-0 bg-light rounded-4 text-decoration-none text-dark">
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
                @empty
                    <div class="card border-0 bg-light rounded-4">
                        <div class="card-body p-5 text-muted text-center">
                            <h5>No collection found</h5>
                            <span>You haven't made the recipe yet</span>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app>
