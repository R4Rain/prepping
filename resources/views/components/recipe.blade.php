<a href="{{ route('recipes.show', $recipe) }}" class="text-decoration-none text-dark h-100" role="button">
    <img src="/storage/recipes/{{ $recipe->photo }}" class="card-img-top rounded-4 mb-3">
    <h5>{{ $recipe->name }}</h5>
    <i class="bi bi-star-fill text-primary me-1"></i>
    {{ $recipe->ratings->count() > 0 ? $recipe->getRating($recipe) . ' ratings' : '0 rating' }}
</a>
