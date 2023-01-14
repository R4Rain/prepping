<x-app title="Explore Recipes">
    <div class="container-lg p-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="card-body p-5">
                        <div class="mb-5">
                            <h2 class="mb-4 text-center">Explore Recipes</h2>
                            <form class="d-flex" role="search" action="{{ route('search') }}">
                                <input type="search" class="form-control me-2" placeholder="Search recipe"
                                    name="search" value="{{ request('search') }}">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="bi bi-search"></i>
                                </button>
                            </form>
                        </div>

                        <div class="mb-5">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="mb-3">
                                    <h4>Browse top categories</h4>
                                    <p class="text-muted m-0">
                                        Find new and old favorites with Whisk users' top recipe categories.
                                    </p>
                                </div>
                                <a href={{ route('categories.index') }} class="btn btn-outline-light">See all</a>
                            </div>

                            <div class="row row-cols-5 g-3">
                                @foreach ($categories as $category)
                                    <div class="col">
                                        <a href="{{ route('categories.show', $category) }}"
                                            class="text-decoration-none text-dark">
                                            <div class="card rounded-3 bg-light">
                                                <div class="card-body">
                                                    {{ $category->name }}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="mb-5">
                            <div class="mb-3">
                                <h4>Discover recipes</h4>
                                <p class="text-muted m-0">
                                    Find and share everyday cooking inspiration with ratings and reviews you can
                                    trust. Recipes for easy dinners, healthy eating, fast and cheap, kid-friendly,
                                    and more.
                                </p>
                            </div>

                            @if ($recipes->count() > 0)
                                <div class="row row-cols-4 g-3">
                                    @foreach ($recipes as $recipe)
                                        <div class="col">
                                            <x-recipe :recipe='$recipe'></x-recipe>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="card rounded-4 bg-light border-0">
                                    <div class="card-body text-center p-5 text-muted">
                                        <h5>No recipes found</h5>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
