<x-app title="Learn to Cook">
    <x-navbar></x-navbar>

    <div class="container-lg p-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="card-body p-5">
                        <div class="text-center mb-5">
                            <h3>Master the culinary arts today</h3>
                            <span>Learn basic skills and techniques in culinary arts</span>
                        </div>

                        <div class="container-lg">
                            @forelse ($courses as $course)
                                <div class="mb-3">
                                    <a href="{{ route('courses.show', $course) }}"
                                        class="text-decoration-none text-dark h-100" role="button">
                                        <div class="row mb-3">
                                            <div class="col-5">
                                                <img src="/storage/courses/{{ $course->photo }}"
                                                    class="card-img-top rounded-3 mb-3">
                                            </div>
                                            <div class="col">
                                                <h5 class="mb-0">{{ $course->title }}</h5>
                                                <p>{{ $course->description }}</p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            @empty
                                <div class="card rounded-4 bg-light border-0">
                                    <div class="card-body text-center p-5 text-muted">
                                        <h5>No courses found</h5>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
