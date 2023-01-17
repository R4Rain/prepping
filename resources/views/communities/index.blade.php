<x-app title="Communities">
    <x-navbar></x-navbar>

    <div class="container-lg p-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="card-body p-5">
                        @if (auth()->user()->communities->count() > 0 && auth()->check())
                            <h4 class="mb-3">My communities</h4>
                            <div class="row row-cols-4 mb-5">
                                @foreach (auth()->user()->communities as $community)
                                    <div class="col">
                                        <a href="{{ route('communities.show', $community) }}" role="button">
                                            <img src="/storage/communities/{{ $community->photo }}"
                                                class="card-img-top rounded-3 mb-3">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        <h4 class="mb-4">Discover New Communities</h4>

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
