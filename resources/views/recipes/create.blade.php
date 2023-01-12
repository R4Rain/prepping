<x-app title="Create Recipe">
    <div class="container-fluid py-5">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="text-center mb-4">What recipe will you share today?</h3>

                <form method="POST" action="{{ route('recipes.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="card rounded-4 mb-4">
                        <div class="card-body p-5">

                            <div class="mb-4">
                                <label for="name" class="form-label">Recipe Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}" required>

                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="category" class="form-label">Category</label>
                                <div class="bd-custom">
                                    @foreach ($categories as $category)
                                        <input class="btn-check" type="checkbox" name="categories[]"
                                            value="{{ $category->id }}" id="{{ $category->id }}">
                                        <label for="{{ $category->id }}"
                                            class="btn btn-outline-check rounded-pill">{{ $category->name }}</label>
                                    @endforeach
                                </div>

                                @error('category')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="description" class="form-label">Description</label>
                                <textarea id="description" name="description" class="form-control">{{ old('description') }}</textarea>

                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="ingredients" class="form-label">Ingredients</label>
                                <textarea id="ingredients" name="ingredients" class="form-control">{{ old('ingredients') }}</textarea>

                                @error('ingredients')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="steps" class="form-label">Steps</label>
                                <textarea id="steps" name="steps" class="form-control">{{ old('steps') }}</textarea>

                                @error('steps')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="row g-4">
                                <div class="col">
                                    <label for="duration" class="form-label">Duration (minutes)</label>
                                    <input type="text" class="input-spinner" step="5" id="duration"
                                        name="duration" value="1" min="1">

                                    @error('duration')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="serving" class="form-label">Serving</label>
                                    <input type="text" class="input-spinner" step="1" id="serving"
                                        name="serving" value="1" min="1">

                                    @error('serving')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-5 col-12">
                                    <label for="image" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="image" name="image" required>

                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('home') }}" class="btn btn-outline-light rounded-3 px-5">Cancel</a>
                        <button type="submit" class="btn btn-primary rounded-3 px-5">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app>
