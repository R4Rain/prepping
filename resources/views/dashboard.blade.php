<x-app title="Dashboard">
    <x-navbar-admin></x-navbar-admin>

    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-5">
                        <h3 class="mb-4">Admin Dashboard</h3>
                        <div class="row mb-5">
                            <div class="col">
                                <div class="card border-0 bg-light rounded-4">
                                    <div class="card-body p-4">
                                        <h4>{{ $categories->count() }}</h4>
                                        <small>Categories</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-0 bg-light rounded-4">
                                    <div class="card-body p-4">
                                        <h4>{{ $recipes->count() }}</h4>
                                        <small>Recipes</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-0 bg-light rounded-4">
                                    <div class="card-body p-4">
                                        <h4>{{ $users->count() }}</h4>
                                        <small>Creators</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-0 bg-light rounded-4">
                                    <div class="card-body p-4">
                                        <h4>{{ $courses->count() }}</h4>
                                        <small>Courses</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5 class="mb-4">Top 5 Recipes</h5>
                        <div class="row row-cols-5">
                            @foreach ($recipes as $recipe)
                                <div class="col">
                                    <x-recipe :recipe='$recipe'></x-recipe>
                                </div>
                            @endforeach
                        </div>

                        <h3>Top 5 Categories</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
