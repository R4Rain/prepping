<x-app title="Search">
    <x-navbar></x-navbar>

    <div class="container-lg p-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="card-body p-5">
                        <h4 class="mb-4">'{{ request('search') }}' search results</h4>
                        @if ($recipes->count() > 0)
                            <div class="row row-cols-4">
                                @foreach ($recipes as $recipe)
                                    <div class="col">
                                        <x-recipe :recipe='$recipe' />
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="card border-0 bg-light rounded-4">
                                <div class="card-body text-center text-muted p-5">
                                    <h4>Oops, recipe not found</h4>
                                    <p class="m-0">Try another keyword</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
