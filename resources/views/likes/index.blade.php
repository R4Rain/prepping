<x-app title="My Collections">
    <div class="container p-5">
        <div class="row">
            <div class="col-4">
                <div class="card border-0 bg-light rounded-4" style="height: 70vh">
                    <div class="card-body p-4">
                        <h3>Liked recipes</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                @if ($recipes->count() > 0)
                    <div class="row row-cols-4">
                        @foreach ($recipes as $recipe)
                            <div class="col">
                                <x-card-recipe :recipe='$recipe'></x-card-recipe>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="card border-0 bg-light rounded-4">
                        <div class="card-body p-5 text-muted text-center">
                            <h5>No recipes found</h5>
                            <span>You haven't made the recipe yet</span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app>
