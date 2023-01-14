<a href="{{ route('communities.show', $community) }}" class="text-decoration-none text-dark h-100" role="button">
    <img src="/storage/communities/{{ $community->photo }}" class="card-img-top rounded-3 mb-3">
    <h5>{{ $community->name }}</h5>
</a>
