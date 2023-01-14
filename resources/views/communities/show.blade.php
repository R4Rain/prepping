<x-app title="{!! $community->name !!}">
    <div class="container-lg p-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="card-body p-5">
                        <div class="d-flex justify-content-between align-items-start mb-4">
                            <div>
                                <h4>{{ $community->name }}</h4>
                                <span>
                                    {{ $community->members->count() }}
                                    {{ $community->members->count() > 1 ? 'members' : 'member' }}
                                    <i class="bi bi-dot"></i>
                                    {{ $community->feeds->count() }}
                                    {{ $community->feeds->count() > 1 ? 'feeds' : 'feed' }}
                                </span>
                            </div>

                            @if (auth()->user()->isMember($community->id) || $community->user_id == auth()->user()->id)
                                <button type="button" class="btn btn-primary rounded-3 px-4" data-bs-toggle="modal"
                                    data-bs-target="#post">
                                    Create post
                                </button>
                            @else
                                <form method="POST" action="{{ route('community-details.store') }}">
                                    @csrf

                                    <input type="hidden" name="community_id" value="{{ $community->id }}">

                                    <button type="submit" class="btn btn-primary rounded-3 px-4">
                                        Join
                                    </button>
                                </form>
                            @endif
                        </div>

                        <div class="row justify-content-center">
                            @if ($community->feeds->count() > 0)
                                <div class="col-7">
                                    @foreach ($community->feeds as $feed)
                                        <div class="card rounded-4">
                                            <div class="card-body p-4">
                                                <div class="d-flex justify-content-between align-items-start">
                                                    <div class="mb-3">
                                                        <b>{{ $feed->communityDetail->user->name }}</b>
                                                        <i class="bi bi-dot"></i>
                                                        <span class="text-muted">
                                                            {{ $feed->getCreatedTime($feed->created_at) }}
                                                        </span>
                                                    </div>
                                                    <button type="button" class="btn btn-sm btn-light rounded-3"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete{{ $feed->id }}">
                                                        <i class="bi bi-trash3-fill text-muted"></i>
                                                    </button>
                                                </div>

                                                <p>{{ $feed->description }}</p>
                                                <a href="{{ route('recipes.show', $feed->recipe) }}"
                                                    class="text-decoration-none text-dark">
                                                    <img src="/storage/recipes/{{ $feed->recipe->photo }}"
                                                        class="rounded-4 mb-2" width="100%">
                                                    <div class="card rounded-4 bg-light border-0">
                                                        <div class="card-body fw-bold">
                                                            {{ $feed->recipe->name }}
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <x-delete :model='$feed' name='feeds'></x-delete>
                                    @endforeach
                                </div>
                            @else
                                <div class="col-12">
                                    <div class="card rounded-4 bg-light border-0">
                                        <div class="card-body text-center p-5 text-muted">
                                            <h5>No activities in here</h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (auth()->user()->isMember($community->id))
        <div class="modal fade" id="post" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content border-0 rounded-4">
                    <div class="modal-body p-5">
                        <h4 class="mb-4 text-center">Your post</h4>

                        <form method="POST" action="{{ route('feeds.store') }}">
                            @csrf
                            <input type="hidden" value="{{ auth()->user()->isMember($community->id)->id }}"
                                name="community_detail_id">

                            <div class="mb-4">
                                <textarea placeholder="Add text (optional)" name="description" class="form-control">{{ old('description') }}</textarea>

                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <h5 class="mb-3">Choose a recipe you wanna share</h5>

                                @foreach (auth()->user()->recipes as $recipe)
                                    <label for="{{ $recipe->id }}" class="mb-3">
                                        <div class="card border-0 bg-light rounded-4">
                                            <div class="card-body">
                                                <div class="row g-3">
                                                    <div class="col-3">
                                                        <img src="/storage/recipes/{{ $recipe->photo }}"
                                                            class="rounded-3" width="100%">
                                                    </div>
                                                    <div class="col my-auto">
                                                        {{ $recipe->name }}
                                                    </div>
                                                    <div class="col-1 my-auto">
                                                        <input class="form-check-input" type="radio" name="recipe_id"
                                                            id="{{ $recipe->id }}" value="{{ $recipe->id }}"
                                                            {{ $loop->first ? 'required' : '' }}>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                @endforeach
                            </div>

                            <button type="submit" class="btn btn-primary rounded-3 w-100">
                                Post
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
</x-app>
