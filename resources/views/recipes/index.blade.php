<x-app title="Explore Recipes">
    <div class="container p-5">
        <div class="mb-5">
            <h2 class="mb-4 text-center">Explore Recipes</h2>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Discover your favorite recipe">
                <button class="btn btn-secondary" type="submit">Search</button>
            </form>
        </div>

        <div class="mb-5">
            <h4>Browse top categories</h4>
            <div class="row row-cols-5 g-3">
                @foreach ($categories as $category)
                    <div class="col">
                        <a href="{{ route('categories.show', $category) }}">
                            <div class="card-body">
                                <h5>{{ $category->name }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app>
