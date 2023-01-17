<div class="card border-0 rounded-4 shadow-sm">
    <div class="card-body p-4">
        <h6 class="m-0">{{ $feed->communityDetail->user->name }}</h6>
        <small class="text-muted">
            {{ $feed->getCreatedTime($feed->created_at) }}
        </small>

        <p class="mt-2">{{ $feed->description }}</p>

        <a href="{{ route('recipes.show', $feed->recipe) }}" class="text-decoration-none text-dark">
            <img src="/storage/recipes/{{ $feed->recipe->photo }}" class="rounded-4 mb-2" width="100%">
        </a>
    </div>
</div>
