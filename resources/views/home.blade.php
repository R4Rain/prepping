<x-app title="Prepping">
    <div class="container py-5">
        <section>
            <div class="row">
                <div class="col-5">
                    <img src="/storage/assets/header-image.png" width="90%">
                </div>
                <div class="col my-auto">
                    <h2>A Personalized Recipe Recommendations Platform</h2>
                    <p>We let the people do the 'talking' to make the best recipes sources out there</p>
                    <button class="btn btn-primary">Explore Now</button>
                </div>
            </div>
        </section>

        <section>
            <h2>Discover Recipes</h2>

            <div class="row row-cols-5">
                @foreach ($recipes as $recipe)
                    <div class="col">
                        <x-card-recipe :recipe='$recipe'></x-card-recipe>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
</x-app>
