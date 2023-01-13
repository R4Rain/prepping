<x-app title="Edit Recipe">
    <div class="container-fluid py-5">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="text-center mb-4">Edit Recipe</h3>

                <form method="POST" action="{{ route('recipes.update', $recipe) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="card rounded-4 mb-4">
                        <div class="card-body p-5">

                            <div class="mb-4">
                                <label for="name" class="form-label">Recipe Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $recipe->name }}" required>

                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="subCategory" class="form-label">Filter</label>
                                <div class="bd-custom">
                                    @foreach ($subCategories as $subCategory)
                                        <input class="btn-check" type="checkbox" name="sub_categories[]"
                                            value="{{ $subCategory['id'] }}" id="{{ $subCategory['id'] }}"
                                            {{ $subCategory['checked'] == 1 ? 'checked' : '' }}>
                                        <label for="{{ $subCategory['id'] }}"
                                            class="btn btn-outline-check rounded-pill">{{ $subCategory['name'] }}</label>
                                    @endforeach
                                </div>

                                @error('subCategory')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="description" class="form-label">Description</label>
                                <textarea id="description" name="description" class="form-control">{!! $recipe->description !!}</textarea>

                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="ingredients" class="form-label">Ingredients</label>
                                <textarea id="ingredients" name="ingredients" class="form-control">{!! $recipe->ingredients !!}</textarea>

                                @error('ingredients')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="steps" class="form-label">Steps</label>
                                <textarea id="steps" name="steps" class="form-control">{!! $recipe->steps !!}</textarea>

                                @error('steps')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="row g-4">
                                <div class="col">
                                    <label for="duration" class="form-label">Duration (minutes)</label>
                                    <input type="text" class="input-spinner" step="5" id="duration"
                                        name="duration" value="{{ $recipe->duration }}" min="1">

                                    @error('duration')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="serving" class="form-label">Serving</label>
                                    <input type="text" class="input-spinner" step="1" id="serving"
                                        name="serving" value="{{ $recipe->serving }}" min="1">

                                    @error('serving')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-5 col-12">
                                    <label for="image" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="image" name="image">

                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('home') }}" class="btn btn-outline-light rounded-3 px-5">Cancel</a>

                        @method('PUT')
                        <button type="submit" class="btn btn-primary rounded-3 px-5">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app>
