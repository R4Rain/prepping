<x-app title="Explore Recipes">
    <div class="container p-5">
        <div class="mb-5">
            <h2 class="mb-4 text-center">Explore Recipes</h2>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Discover your favorite recipe">
                <button class="btn btn-secondary" type="submit">Search</button>
            </form>
        </div>

        @foreach ($categories as $category)
            <div class="mb-5">
                <h4 class="mb-3">{{ $category->name }} Recipe</h4>
                <div class="row row-cols-4 g-3">
                    @foreach ($category->categories as $category)
                        <div class="col">
                            <a type="button" href="{{ route('sub-categories.index', $category) }}"
                                class="btn btn-light rounded-3 w-100 text-start">
                                {{ $category->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</x-app>
