<x-app title="Create Course">
    <x-navbar-admin></x-navbar-admin>

    <div class="container-lg p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-5 pt-4">
                        <form method="POST" action="{{ route('courses.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex justify-content-between align-items-center bg-white py-4 mb-4 sticky-top">
                                <h4 class="m-0">
                                    <a href="{{ route('courses.manage') }}" class="text-dark">
                                        <i class="bi bi-arrow-left me-2"></i></a>
                                    Create Course
                                </h4>
                                <button type="submit" class="btn btn-primary rounded-3 px-4">Save</button>
                            </div>

                            <div class="mb-5">
                                <h5>Title<small class="text-danger ms-1">*</small></h5>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title') }}" placeholder="Give your course a title" required>

                                @error('title')
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

                                <input type="file" id="photo" name="photo" class="form-control mt-3" required>
                            </div>

                            <div class="mb-5">
                                <h5>Description<small class="text-danger ms-1">*</small></h5>
                                <textarea placeholder="Introduce your course, add notes, etc..." name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
