<x-app title="Create Lesson">
    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-5 pt-4">
                        <form method="POST" action="{{ route('learn.lessons.store', $course) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex justify-content-between align-items-center bg-white py-4 mb-5 sticky-top">
                                <h4 class="m-0">
                                    <a href="{{ url()->previous() }}" class="text-dark">
                                        <i class="bi bi-arrow-left me-2"></i></a>
                                    Create Lesson
                                </h4>
                                <button type="submit" class="btn btn-primary rounded-3 px-4">Save</button>
                            </div>

                            <div class="mb-5">
                                <h5>Title<small class="text-danger ms-1">*</small></h5>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title') }}" placeholder="Give your lesson a title" required>

                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <h5>Subtitle<small class="text-danger ms-1">*</small></h5>
                                <input type="text" class="form-control" id="subtitle" name="subtitle"
                                    value="{{ old('subtitle') }}" placeholder="Give your lesson a subtitle" required>

                                @error('subtitle')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <h5>Content<small class="text-danger ms-1">*</small></h5>
                                <textarea placeholder="Create your content of the lesson..." id="content" name="content" class="form-control">{{ old('content') }}</textarea>

                                @error('content')
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
