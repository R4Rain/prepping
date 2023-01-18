<x-app title="{!! $community->name !!}">
    <x-navbar></x-navbar>

    <div class="container-lg p-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card border-0 rounded-4 shadow-sm mb-4">
                    <div class="card-body p-5 d-flex justify-content-between align-items-start">
                        <div class="d-flex">
                            <img src="/storage/communities/{{ $community->photo }}" class="rounded-4 me-3" width="100">
                            <div>
                                <h4>{{ $community->name }}</h4>
                                <div class="mb-2">
                                    {{ $community->members->count() }}
                                    {{ $community->members->count() > 1 ? 'members' : 'member' }}
                                    <i class="bi bi-dot"></i>
                                    {{ $community->feeds->count() }}
                                    {{ $community->feeds->count() > 1 ? 'feeds' : 'feed' }}
                                </div>
                                <div>By <b>{{ $community->user->name }}</b></div>
                            </div>
                        </div>

                        @if (auth()->user()->id == $community->user_id)
                            <div class="d-flex gap-3">
                                <a href="{{ route('communities.edit', $community) }}" type="submit"
                                    class="btn btn-outline-secondary rounded-3 px-4">
                                    Edit
                                </a>
                                <button type="button" class="btn btn-secondary rounded-3 px-4" data-bs-toggle="modal"
                                    data-bs-target="#create-post-1">
                                    Create post
                                </button>
                            </div>
                        @elseif (auth()->user()->isMember($community->id))
                            <div class="d-flex gap-3">
                                <button type="submit" class="btn btn-light rounded-3 px-4" data-bs-toggle="modal"
                                    data-bs-target="#leave">
                                    <i class="bi bi-people-fill me-1"></i> Joined
                                </button>

                                <button type="button" class="btn btn-secondary rounded-3 px-4" data-bs-toggle="modal"
                                    data-bs-target="#create-post-1">
                                    Create post
                                </button>
                            </div>

                            <div class="modal fade" id="leave" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content border-0 rounded-4">
                                        <div class="modal-body text-center p-5">
                                            <h4 class="mb-4">Leave Confirmation</h4>

                                            <form method="POST"
                                                action="{{ route('community-details.destroy', $community) }}">
                                                @csrf

                                                <p class="mb-4">Are you sure want to leave this group?</p>

                                                <button type="button" class="btn btn-outline-light rounded-3 px-4 me-2"
                                                    data-bs-dismiss="modal">
                                                    Cancel
                                                </button>

                                                <input type="hidden" name="_method" value='DELETE'>
                                                <button type="submit"
                                                    class="btn btn-primary rounded-3 px-4">Continue</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <form method="POST" action="{{ route('community-details.store') }}">
                                @csrf
                                <input type="hidden" name="community_id" value="{{ $community->id }}">

                                <button type="submit" class="btn btn-secondary rounded-3 px-4 me-2">Join</button>
                            </form>
                        @endif
                    </div>
                </div>

                <div class="row g-5 justify-content-center">
                    <div class="col-6">
                        @forelse ($community->feeds as $feed)
                            <x-feed :feed='$feed'></x-feed>

                            <x-delete :model='$feed' name='feeds'></x-delete>
                        @empty
                            <div class="card rounded-4 bg-light border-0">
                                <div class="card-body text-center p-5 text-muted">
                                    <h5>No activities in here</h5>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (auth()->user()->isMember($community->id))

        <form method="POST" action="{{ route('feeds.store') }}">
            @csrf
            
            <input type="hidden" value="{{ auth()->user()->isMember($community->id)->id }}"
                name="community_detail_id">

            <div class="modal fade" id="create-post-1" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content border-0 rounded-4">
                        <div class="modal-body p-5">
                            <div class="text-center mb-4">
                                <h4>Create new post</h4>
                                @if (auth()->user()->recipes->count() > 0)
                                    <span class="text-muted">Select a recipe you want to share</span>
                                @endif
                            </div>

                            @forelse (auth()->user()->recipes as $recipe)
                                <label for="{{ $recipe->id }}" class="mb-3">
                                    <div class="card border-0 bg-light rounded-4">
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <div class="col-3">
                                                    <img src="/storage/recipes/{{ $recipe->photo }}" class="rounded-3"
                                                        width="100%">
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
                            @empty
                                <div class="card rounded-4 bg-light border-0">
                                    <div class="card-body text-center p-5 text-muted">
                                        <h5>No recipes found</h5>
                                        <small>You don't have a recipe to share</small>
                                    </div>
                                </div>
                            @endforelse

                            <button id="createPost" type="button" hidden
                                class="btn btn-outline-primary rounded-3 w-100 mt-2" data-bs-toggle="modal"
                                data-bs-target="#create-post-2">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="create-post-2" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content border-0 rounded-4">
                        <div class="modal-body p-5">
                            <div class="text-center mb-4">
                                <h4>Create new post</h4>
                                <span class="text-muted">Add caption</span>
                            </div>

                            <div class="mb-4">
                                <textarea name="description" class="form-control rounded-3">{{ old('description') }}</textarea>

                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="row g-2">
                                <div class="col">
                                    <button type="button" class="btn btn-outline-light rounded-3 w-100"
                                        data-bs-toggle="modal" data-bs-target="#create-post-1">
                                        Back
                                    </button>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary rounded-3 w-100">Share</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif
</x-app>
