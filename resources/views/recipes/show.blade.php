<x-app title="{!! $recipe->name !!}">
    <div class="container p-5">
        <div class="row g-5 mb-5">
            <div class="col">
                <h3>{{ $recipe->name }}</h3>
                <div>
                    @foreach ($recipe->categories as $category)
                        <span class="badge bg-secondary rounded-pill">{{ $category->name }}</span>
                    @endforeach
                </div>
                <div class="my-4">{!! $recipe->description !!}</div>
                <div class="card border-0 bg-light rounded-4 mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col text-center">
                                <i class="bi bi-star-fill fs-2 text-primary"></i>
                                <h6>4.0</h6>
                            </div>
                            <div class="col text-center">
                                <i class="bi bi-clock fs-2 text-primary"></i>
                                <h6>{{ $recipe->duration }} mins</h6>
                            </div>
                            <div class="col text-center">
                                <i class="bi bi-cup-hot fs-2 text-primary"></i>
                                <h6>{{ $recipe->serving }} serves</h6>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($recipe->user_id == auth()->user()->id)
                    <div class="row g-2">
                        <div class="col-md-6">
                            <a type="button" href="{{ route('recipes.edit', $recipe) }}"
                                class="btn btn-outline-primary w-100">Edit</a>
                        </div>
                        <div class="col-md-6">
                            <a type="button" href="{{ route('recipes.edit', $recipe) }}"
                                class="btn btn-outline-primary w-100">Delete</a>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-4">
                <img src="/storage/recipes/{{ $recipe->image }}" width="100%" class="rounded-4 mb-4">
                @if ($recipe->user_id != auth()->user()->id)
                    <button type="button" class="btn btn-outline-primary w-100" data-bs-toggle="modal"
                        data-bs-target="#show-collection">
                        Add to collection
                    </button>
                @endif
            </div>
        </div>

        <div class="mb-5">
            <h4 class="mb-3">Ingredients</h4>
            <div>{!! $recipe->ingredients !!}</div>
        </div>

        <div>
            <h4 class="mb-3">Steps</h4>
            <div>{!! $recipe->steps !!}</div>
        </div>

        <hr class="my-5" style="border-style: dashed">

        {{-- COMMENTS --}}
        <h4 class="mb-3">{{ $recipe->comments->count() }} comments</h4>

        @if (auth()->check())
            @if ($recipe->user_id != auth()->user()->id)
                <form method="POST" action="{{ route('comments.store') }}" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">

                    <div class="d-flex align-items-start gap-3 mb-2">
                        <i class="bi bi-person-square fs-1 text-muted"></i>
                        <div class="form-floating w-100">
                            <textarea class="form-control border-0 bg-light" id="comment" name="comment">{{ old('comment') }}</textarea>
                            <label for="comment">Add a comment</label>
                        </div>

                        @error('comment')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="text-end mb-4">
                        <button type="submit" id="btnComment" class="btn btn-primary rounded-3"
                            disabled>Comment</button>
                    </div>
                </form>
            @endif
        @else
            <div class="card border-0 bg-light rounded-4">
                <div class="card-body py-4 text-center text-muted">
                    <i class="bi bi-lock-fill fs-1"></i>
                    <div class="mt-2">Login first to add a comment</div>
                </div>
            </div>
        @endif

        @forelse ($recipe->comments as $comment)
            <div class="card border-0 bg-light rounded-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <small>
                            <b>{{ $comment->user->name }}</b>
                            <span class="text-muted">{{ $comment->getCreatedTime($comment->created_at) }}</span>
                        </small>
                        <i class="bi bi-three-dots-vertical"></i>
                    </div>
                    <div>{{ $comment->content }}</div>
                </div>
            </div>
        @empty
        @endforelse
    </div>

    <div class="modal fade" id="show-collection" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content border-0">
                <div class="modal-body p-5">
                    <div class="mb-4">
                        <h4 class="text-center">Add to collection</h4>
                        <small class="text-muted">You can save recipe to a new collection or existing
                            collection.</small>
                    </div>

                    <form method="POST" action="{{ route('collection-details.store') }}">
                        @csrf

                        <input type="hidden" value="{{ $recipe->id }}" name="recipe_id">

                        <div class="mb-4">
                            @forelse (auth()->user()->collections as $collection)
                                <div class="card rounded-4">
                                    <div class="card-body">
                                        <div class="row g-0">
                                            <div class="col">
                                                <h6>{{ $collection->name }}</h6>
                                                <small>{{ $collection->recipes->count() }} recipes</small>
                                            </div>
                                            <div class="col-1 my-auto text-end">
                                                <input class="form-check-input" type="checkbox" name="collections[]"
                                                    value="{{ $collection->id }}" id="{{ $collection->id }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="card border-0 bg-light rounded-4">
                                    <div class="card-body text-center">
                                        <h6>Find your collection in here</h6>
                                    </div>
                                </div>
                            @endforelse
                        </div>

                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-outline-primary rounded-3" data-bs-toggle="modal"
                                data-bs-target="#create-collection">
                                Create new collection
                            </button>
                            <button type="submit" class="btn btn-primary rounded-3"
                                {{ auth()->user()->collections->count() < 1? 'disabled': '' }}>
                                Save changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="create-collection" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content border-0">
                <div class="modal-body p-5">
                    <h4 class="text-center mb-4">Create new collection</h4>

                    <form method="POST" action="{{ route('collections.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="form-label">Collection name</label>
                            <input id="name" type="text" class="form-control" name="name" required>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100 rounded-3">
                            {{ __('Confirm') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>
