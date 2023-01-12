<a href="{{ route('recipes.show', $recipe) }}" class="card rounded-3 text-decoration-none text-dark h-100" role="button">
    <img src="/storage/recipes/{{ $recipe->image }}" class="card-img-top">
    <div class="card-body">
        {{-- <small>{{ $recipe->category->name }}</small> --}}
        <h5 class="mt-2">{{ $recipe->name }}</h5>
    </div>
</a>
