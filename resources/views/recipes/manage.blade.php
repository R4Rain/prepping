<x-app title="My Recipes">
    <x-navbar></x-navbar>

    <div class="container-lg p-5">
        <div class="row">
            <div class="col-4">
                <x-sidebar></x-sidebar>
            </div>
            <div class="col">
                @if ($recipes->count() > 0)
                    <div class="card border-0 bg-white shadow-sm rounded-4">
                        <div class="card-body p-4">
                            <h4 class="mb-4">My Recipes</h4>

                            @foreach ($recipes as $recipe)
                                <a type="button" href="{{ route('recipes.show', $recipe) }}"
                                    class="recipe-card text-decoration-none text-dark mb-3">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="/storage/recipes/{{ $recipe->photo }}" class="rounded-3"
                                                width="100%">
                                        </div>
                                        <div class="col">
                                            <p class="mb-2">{{ $recipe->name }}</p>
                                            <div class="text-muted">
                                                <i class="bi bi-star-fill me-1"></i>
                                                {{ $recipe->ratings->count() > 0 ? $recipe->getRating($recipe) : '0' }}
                                                <i class="bi bi-dot"></i>
                                                {{ $recipe->collections->count() }} saved
                                                <i class="bi bi-dot"></i>
                                                {{ $recipe->comments->count() }}
                                                {{ $recipe->comments->count() > 1 ? 'comments' : 'comment' }}
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="card border-0 shadow-sm bg-white rounded-4">
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
