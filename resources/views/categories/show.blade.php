<x-app title="{!! $category->name !!}">
    <div class="container-lg p-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="card-body p-5">
                        <h2 class="mb-4">{{ $category->name }}</h2>

                        @if ($category->recipes->count() > 0)
                            <div class="row row-cols-4 g-3">
                                @foreach ($category->recipes as $recipe)
                                    <div class="col">
                                        <x-recipe :recipe='$recipe'></x-recipe>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="card rounded-4 bg-light border-0">
                                <div class="card-body text-center p-5 text-muted">
                                    <h5>No recipe found</h5>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
