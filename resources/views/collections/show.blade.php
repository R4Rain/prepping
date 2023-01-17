<x-app title="{!! $collection->name !!}">
    <x-navbar></x-navbar>

    <div class="container-lg p-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="card-body p-5">
                        <h4 class="mb-4">
                            <a href="{{ route('collections.index') }}" class="text-dark">
                                <i class="bi bi-arrow-left me-2"></i></a>
                            {{ $collection->name }}
                        </h4>

                        @if ($collection->recipes->count() > 0)
                            <div class="row row-cols-3 gx-4 gy-5">
                                @foreach ($collection->recipes as $recipe)
                                    <div class="col">
                                        <div class="mb-2">
                                            <x-recipe :recipe='$recipe'></x-recipe>
                                        </div>

                                        <form method="POST"
                                            action="{{ route('collection-details.destroy', [$collection, $recipe]) }}">
                                            @csrf
                                            <input type="hidden" name="_method" value='DELETE'>
                                            <button class="btn btn-outline-light w-100">Delete</button>
                                        </form>
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
</x-app>
