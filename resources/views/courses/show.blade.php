<x-app title="{!! $course->title !!}">
    <x-navbar></x-navbar>

    <div class="container-lg p-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="rounded-4 m-3 mb-0"
                        style="
                        background-image: url('/storage/courses/{{ $course->photo }}');
                        background-position: top;
                        background-size:100%;
                        height:15rem;
                        ">
                    </div>

                    <div class="card-body p-5">
                        <div class="mb-4">
                            <h3>{{ $course->title }}</h3>
                            <small class="text-muted">{{ $course->description }}</small>
                        </div>

                        <p class="mb-4">Estimated finish: {{ $course->estimated_finish }} hours</p>

                        @foreach ($course->lessons as $index => $lesson)
                            <a class="text-decoration-none fw-semibold" data-bs-toggle="modal"
                                data-bs-target="#lesson{{ $lesson->id }}" role="button">
                                <div class="card border-0 bg-light rounded-3 mb-3">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="me-3 fw-bold">{{ $index + 1 }}</div>
                                            <div>
                                                <h6 class="mb-1">{{ $lesson->title }}</h6>
                                                <small>{{ $lesson->subtitle }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <x-lesson :lesson='$lesson'></x-lesson>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
