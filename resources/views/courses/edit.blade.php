<x-app title="Edit Course">
    <x-navbar-admin></x-navbar-admin>

    <div class="container-fluid p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-5 pt-4">
                        <form method="POST" action="{{ route('courses.update', $course) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex justify-content-between align-items-center bg-white py-4 mb-4 sticky-top">
                                <h4 class="m-0">
                                    <a href="{{ route('courses.manage') }}" class="text-dark">
                                        <i class="bi bi-arrow-left me-2"></i></a>
                                    Edit Course
                                </h4>

                                <div class="d-flex gap-2">
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#delete{{ $course->id }}"
                                        class="btn btn-outline-light rounded-3">
                                        Delete
                                    </button>

                                    @method('put')
                                    <button type="submit" class="btn btn-primary rounded-3 px-4">Save</button>
                                </div>
                            </div>

                            <div class="mb-5">
                                <h5>Title</h5>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $course->title }}" placeholder="Give your course a title" required>

                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <img src="/storage/courses/{{ $course->photo }}" id="card-img" class="rounded-3"
                                    width="100%">
                                <img id="img-preview" class="rounded-3" width="100%" src="#" hidden>

                                <input type="file" id="photo" name="photo" class="form-control mt-3">
                            </div>

                            <div class="mb-5">
                                <h5>Description</h5>
                                <textarea placeholder="Introduce your course, add notes, etc..." name="description" class="form-control" rows="3">{{ $course->description }}</textarea>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <h5>Estimated hours to finish</h5>
                                <div class="text-muted mb-2">How long does it takes to finish the course?</div>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="estimated_finish" placeholder="0"
                                        value="{{ $course->estimated_finish }}" required>
                                    <span class="input-group-text">hour(s)</span>
                                </div>
                                @error('estimated_finish')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div>
                                <h5>Lessons</h5>
                                @foreach ($course->lessons as $index => $lesson)
                                    <div class="row mb-2">
                                        <div class="col">
                                            <span class="me-3">{{ $index + 1 }}</span>{{ $lesson->title }}
                                        </div>
                                        <div class="col text-end">
                                            <a href="{{ route('lessons.edit', $lesson) }}"
                                                class="btn btn-primary btn-sm rounded-3">Edit</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-delete :model='$course' name='courses'></x-delete>
</x-app>
