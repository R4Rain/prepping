<x-app title="{!! $course->title !!}">
    <div class="container-lg p-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="card-body p-5">
                        <div class="row g-5 mb-4">
                            <div class="col">
                                <h2>{{ $course->title }}</h2>
                                <small>
                                    Published on {{ date('F j, Y', strtotime($course->created_at)) }}
                                </small>
                                <div class="my-4 text-muted">
                                    {!! $course->description !!}
                                </div>

                                <div class="card border-0 bg-light rounded-3">
                                    <div class="card-body d-flex justify-content-center align-items-center gap-5">
                                        <div>
                                            <i class="bi bi-file-text-fill text-primary me-1"></i>
                                            <span class="text-muted">{{$course->lessons->count()}} lessons</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <img src="/storage/courses/{{ $course->photo }}" width="100%" class="rounded-4 mb-3">
                                <div class="row g-2">
                                    @if (auth()->user()->role == 'ADMIN')
                                        <div class="col">
                                            <a href="{{ route('learn.edit', $course) }}"
                                                class="btn btn-primary rounded-3 w-100">
                                                <i class="bi bi-pencil me-1"></i> Edit
                                            </a>
                                        </div>
                                        <div class="col">
                                            <form method="POST" action="{{ route('learn.destroy', $course) }}">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-outline-primary rounded-3 w-100" type="submit">
                                                    <i class="bi bi-trash3 me-1"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <hr class="my-5" style="border-style: dashed">
                        <div class="d-flex justify-content-between mb-3">
                            <h4 class="d-flex align-items-center">Lessons</h4>
                            @if (auth()->user()->role == 'ADMIN')
                                <div>
                                    <a href="{{ route('learn.lessons.create', $course) }}" class="btn btn-primary rounded-3">
                                        <i class="bi bi-file-text me-1"></i> Create a lesson
                                    </a>
                                </div>
                            @endif
                        </div>
                        <div class="mb-5">
                            @if($course->lessons->count() > 0)
                                @foreach ($course->lessons as $lesson)
                                    <div class="row mb-3">
                                        <x-lesson :course='$course' :lesson='$lesson' :index='$loop->index + 1'></x-lesson>
                                    </div>
                                @endforeach
                            @else
                                <div class="card rounded-4 bg-light border-0">
                                    <div class="card-body text-center p-5 text-muted">
                                        <h5>No lesson found</h5>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>