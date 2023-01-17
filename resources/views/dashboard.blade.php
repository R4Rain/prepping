<x-app title="Dashboard">
    <x-navbar-admin></x-navbar-admin>

    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-5">
                        <h3 class="mb-4">Admin Dashboard</h3>
                        <div class="row mb-5">
                            <div class="col">
                                <div class="card border-0 bg-light rounded-4">
                                    <div class="card-body p-4">
                                        <h4>{{ $category_count }}</h4>
                                        <small>Categories</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-0 bg-light rounded-4">
                                    <div class="card-body p-4">
                                        <h4>{{ $recipe_count }}</h4>
                                        <small>Recipes</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-0 bg-light rounded-4">
                                    <div class="card-body p-4">
                                        <h4>{{ $creator_count }}</h4>
                                        <small>Creators</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-0 bg-light rounded-4">
                                    <div class="card-body p-4">
                                        <h4>{{ $course_count }}</h4>
                                        <small>Courses</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h4 class="mb-4">Top 3 Recipes</h4>
                        <div class="row row-cols-3 mb-5">
                            @foreach ($recipes as $recipe)
                                <div class="col">
                                    <x-recipe :recipe='$recipe'></x-recipe>
                                </div>
                            @endforeach
                        </div>

                        <h4 class="mb-4">Top 3 Creators</h4>
                        <div class="row row-cols-3">
                            @foreach ($creators as $creator)
                                <div class="col">
                                    <img src="/storage/users/{{ $creator->photo }}" width="100%"
                                        class="rounded-4 mb-3">
                                    <h5>{{ $creator->name }}</h5>
                                    <span>{{ $creator->recipes->count() }} recipes</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
