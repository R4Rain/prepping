<x-app title="Communities">
    <div class="container-lg p-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="card-body p-5">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 class="m-0">Discover New Communities</h4>
                            <a href="{{ route('communities.create') }}" class="btn btn-primary rounded-3">
                                <i class="bi bi-plus-lg me-2"></i>Create community
                            </a>
                        </div>

                        @if ($communities->count() > 0)
                            <div class="row row-cols-2">
                                @foreach ($communities as $community)
                                    <div class="col">
                                        <x-community :community='$community'></x-community>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="card rounded-4 bg-light border-0">
                                <div class="card-body text-center p-5 text-muted">
                                    <h5>No communities found</h5>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
