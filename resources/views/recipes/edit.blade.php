<x-app title="Edit Recipe">
    <x-navbar></x-navbar>

    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-5 pt-4">
                        <form method="POST" action="{{ route('recipes.update', $recipe) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="d-flex justify-content-between align-items-center bg-white py-4 mb-5 sticky-top">
                                <h4 class="m-0">
                                    <a href="{{ route('recipes.show', $recipe) }}" class="text-dark">
                                        <i class="bi bi-arrow-left me-2"></i></a>
                                    Edit Recipe
                                </h4>

                                @method('put')
                                <button type="submit" class="btn btn-secondary rounded-3 px-4">Save</button>
                            </div>

                            <div class="container-lg px-lg-5">
                                <div class="mb-5">
                                    <h5>Title</h5>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $recipe->name }}" placeholder="Give your recipe a name" required>

                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-5">
                                    <img src="/storage/recipes/{{ $recipe->photo }}" id="card-img" class="rounded-3"
                                        width="100%">
                                    <img id="img-preview" class="rounded-3" width="100%" src="#" hidden>

                                    <input type="file" id="photo" name="photo" class="form-control mt-3">
                                </div>

                                <div class="mb-5">
                                    <h5>Category</h5>
                                    <fieldset class="bd-custom">
                                        @foreach ($categories as $category)
                                            <input class="btn-check" type="checkbox" name="categories[]"
                                                value="{{ $category['id'] }}" id="{{ $category['id'] }}"
                                                {{ $category['checked'] ? 'checked' : '' }}>
                                            <label for="{{ $category['id'] }}"
                                                class="btn btn-outline-check rounded-pill">{{ $category['name'] }}</label>
                                        @endforeach
                                    </fieldset>

                                    @error('category')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-5">
                                    <h5>Description</h5>
                                    <textarea placeholder="Introduce your recipe, add notes, cooking tips, serving suggestions, etc..." name="description"
                                        class="form-control" rows="3">{{ $recipe->description }}</textarea>

                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-5">
                                    <h5>Ingredients</h5>
                                    <textarea placeholder="Add one or multiple items" id="ingredients" name="ingredients" class="form-control">{{ $recipe->ingredients }}</textarea>

                                    @error('ingredients')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-5">
                                    <h5>Instructions</h5>
                                    <textarea placeholder="Add one or multiple steps" id="instructions" name="instructions" class="form-control">{{ $recipe->instructions }}</textarea>

                                    @error('instructions')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-5">
                                    <h5>Servings</h5>
                                    <div class="text-muted mb-2">How many portions does this recipe make?</div>
                                    <input type="number" class="form-control" name="servings"
                                        value="{{ $recipe->servings }}" required>

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
                                                    value="{{ $recipe->getHours($recipe->prep_time) }}">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group">
                                                <span class="input-group-text">Minutes</span>
                                                <input type="number" class="form-control" name="prep_minutes"
                                                    value="{{ $recipe->getMinutes($recipe->prep_time) }}">
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
                                                    value="{{ $recipe->getHours($recipe->cook_time) }}">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group">
                                                <span class="input-group-text">Minutes</span>
                                                <input type="number" class="form-control" name="cook_minutes"
                                                    value="{{ $recipe->getMinutes($recipe->cook_time) }}">
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
