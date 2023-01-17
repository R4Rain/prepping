<x-app title="All Category">
    <x-navbar></x-navbar>

    <div class="container-lg p-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="card-body p-5">
                        <h4 class="mb-4">
                            <a href="{{ route('recipes.index') }}" class="text-dark">
                                <i class="bi bi-arrow-left me-2"></i></a>
                            All Category
                        </h4>

                        <div class="row row-cols-5 g-3">
                            @foreach ($categories as $category)
                                <div class="col">
                                    <a href="{{ route('categories.show', $category) }}"
                                        class="text-decoration-none text-dark">
                                        <div class="card rounded-3 bg-light border-0 h-100">
                                            <div class="card-body fw-semibold">
                                                {{ $category->name }}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
