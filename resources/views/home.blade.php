<x-app title="Prepping">
    <section id="header">
        <div class="container-lg p-5">
            <div class="row g-5">
                <div class="col-md my-auto">
                    <h1 class="mb-3">The Ultimate Cooking Platform</h1>
                    <p class="text-muted mb-4">
                        Helping and inspiring a new generation to find joy in the kitchen and take pride in putting a
                        home-cooked meal on the table, all with the unbridled fun and spirit!
                    </p>

                    @if (auth()->check())
                        <form class="d-flex" role="search" action="{{ route('search') }}">
                            <input class="form-control me-2" type="search" name="search" value="{{ request('search') }}" placeholder="Discover your favorite recipe">
                            <button class="btn btn-secondary" type="submit">Search</button>
                        </form>
                    @else
                        <button type="button" class="btn btn-primary rounded-3" data-bs-toggle="modal"
                            data-bs-target="#register">Sign up for free</button>
                    @endif
                </div>
                <div class="col-md-5">
                    <img src="/storage/assets/figur-1.png" width="100%">
                </div>
            </div>
        </div>
    </section>

    <section id="subscription">
        <div class="container-fluid">
            <div class="text-center mb-4">

            </div>
        </div>
    </section>

    <section id="recipe">
        <div class="container-lg  p-5">
            <div class="text-center mb-5">
                <h2>More than 500 recipes have been shared on this platform</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
            </div>

            <div class="card border-0 rounded-4 shadow-sm">
                <div class="card-body p-5">
                    <div class="mb-5">
                        <h4>Popular Recipe Categories</h4>
                    </div>

                    <div class="mb-5">
                        <h4>Discover Recipes</h4>
                        <p class="text-muted">
                            Find and share everyday cooking inspiration with ratings and reviews you can trust. Recipes
                            for easy dinners, healthy eating, fast and cheap, kid-friendly, and more.
                        </p>

                        <div class="row row-cols-4">
                            @foreach ($recipes as $recipe)
                                <div class="col">
                                    <x-recipe :recipe='$recipe'></x-recipe>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>

    </footer>
</x-app>
