<div class="modal fade" id="collection" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content border-0 rounded-4">
            <div class="modal-body p-5">
                <div class="mb-4 text-center">
                    <h4 class="mb-2">Add to collection</h4>
                    <small class="text-muted">You can save recipe to a new collection or existing
                        collection</small>
                </div>

                <form method="POST" action="{{ route('collection-details.store') }}">
                    @csrf

                    <input type="hidden" value="{{ $recipe->id }}" name="recipe_id">

                    <div class="mb-4">
                        @forelse (auth()->user()->collections as $collection)
                            <div class="card rounded-4 mb-3">
                                <div class="card-body">
                                    <div class="row g-0">
                                        <div class="col">
                                            <h6>{{ $collection->name }}</h6>
                                            <small>{{ $collection->recipes->count() }} recipes</small>
                                        </div>
                                        <div class="col-1 my-auto text-end">
                                            <input class="form-check-input" type="checkbox" name="collections[]"
                                                value="{{ $collection->id }}" id="{{ $collection->id }}"
                                                {{ $loop->first ? 'required' : '' }}>
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
                        <button type="submit" class="btn btn-primary rounded-3">
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
                <h4 class="text-dark mb-4">
                    <i type="button" class="bi bi-arrow-left me-2" data-bs-toggle="modal"
                        data-bs-target="#collection"></i>
                    Create new collection
                </h4>

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
