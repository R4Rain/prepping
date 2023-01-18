<x-app title="Edit Lesson">
    <x-navbar-admin></x-navbar-admin>

    <div class="container-lg p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-5 pt-4">
                        <form method="POST" action="{{ route('lessons.update', $lesson) }}">
                            @csrf
                            <div class="d-flex justify-content-between align-items-center bg-white py-4 mb-4 sticky-top">
                                <h4 class="m-0">
                                    <a href="{{ url()->previous() }}" class="text-dark">
                                        <i class="bi bi-arrow-left me-2"></i></a>
                                    Edit Lesson
                                </h4>
                                @method('put')
                                <button type="submit" class="btn btn-primary rounded-3 px-4">Save</button>
                            </div>

                            <div class="mb-5">
                                <h5>Title</h5>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $lesson->title }}" required>

                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <h5>Subtitle</h5>
                                <input type="text" class="form-control" id="subtitle" name="subtitle"
                                    value="{{ $lesson->subtitle }}" required>

                                @error('subtitle')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <h5>Content</h5>
                                <textarea id="content" name="content" class="form-control" rows='3'>{{ $lesson->content }}</textarea>

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
