<x-app title="Create Recipe">
    <div class="container-fluid py-5">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-5 pt-4">
                        <form method="POST" action="{{ route('recipes.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="d-flex justify-content-between align-items-center bg-white py-4 mb-5 sticky-top">
                                <h4 class="m-0">
                                    <a href="{{ route('recipes.index') }}" class="text-dark">
                                        <i class="bi bi-arrow-left me-2"></i></a>
                                    Add Recipe
                                </h4>
                                <div>
                                    <button type="submit" class="btn btn-outline-light rounded-3 px-4 me-2">
                                        Save & Share
                                    </button>
                                    <button type="submit" class="btn btn-primary rounded-3 px-4">Save</button>
                                </div>
                            </div>

                            <div class="container-lg px-lg-5">
                                <div class="mb-5">
                                    <h5>Title</h5>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name') }}" placeholder="Give your recipe a name" required>

                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-5">
                                    <div id="card-img" class="card bg-light">
                                        <div class="card-body text-center p-5">
                                            <i class="bi bi-camera2 fs-4"></i>
                                            <h6>Add a photo</h6>
                                        </div>
                                    </div>
                                    <img id="img-preview" class="rounded-3" width="100%" src="#" hidden>

                                    <input type="file" id="photo" name="photo" class="form-control mt-3"
                                        required>
                                </div>

                                <div class="mb-5">
                                    <h5>Category</h5>
                                    <fieldset class="bd-custom">
                                        @foreach ($categories as $category)
                                            <input class="btn-check" type="checkbox" name="categories[]"
                                                value="{{ $category->id }}" id="{{ $category->id }}"
                                                {{ $loop->first ? 'required' : '' }}>
                                            <label for="{{ $category->id }}"
                                                class="btn btn-outline-check rounded-pill">{{ $category->name }}</label>
                                        @endforeach
                                    </fieldset>

                                    @error('category')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-5">
                                    <h5>Description</h5>
                                    <textarea placeholder="Introduce your recipe, add notes, cooking tips, serving suggestions, etc..." name="description"
                                        class="form-control" rows="3" required>{{ old('description') }}</textarea>

                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-5">
                                    <h5>Ingredients</h5>
                                    <textarea placeholder="Add one or multiple items" id="ingredients" name="ingredients" class="form-control" required>{{ old('ingredients') }}</textarea>

                                    @error('ingredients')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-5">
                                    <h5>Instructions</h5>
                                    <textarea placeholder="Add one or multiple steps" id="instructions" name="instructions" class="form-control" required>{{ old('instructions') }}</textarea>

                                    @error('instructions')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-5">
                                    <h5>Servings</h5>
                                    <div class="text-muted mb-2">How many portions does this recipe make?</div>
                                    <input type="number" class="form-control" name="servings" placeholder="0"
                                        value="{{ old('servings') }}" required>

                                    @error('servings')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-5">
                                    <h5>Prep time</h5>
                                    <div class="text-muted mb-2">How long does it take to prepare this recipe?</div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group">
                                                <span class="input-group-text">Hours</span>
                                                <input type="number" class="form-control" name="prep_hours"
                                                    placeholder="0">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group">
                                                <span class="input-group-text">Minutes</span>
                                                <input type="number" class="form-control" name="prep_minutes"
                                                    placeholder="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h5>Cook time</h5>
                                    <div class="text-muted mb-2">How long does it take to cook this recipe?</div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group">
                                                <span class="input-group-text">Hours</span>
                                                <input type="number" class="form-control" name="cook_hours"
                                                    placeholder="0">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group">
                                                <span class="input-group-text">Minutes</span>
                                                <input type="number" class="form-control" name="cook_minutes"
                                                    placeholder="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
