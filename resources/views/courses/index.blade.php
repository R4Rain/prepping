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
                                <div class="mb-5">
                                    <a href="{{ route('courses.show', $course) }}" class="text-decoration-none text-dark"
                                        role="button">
                                        <div class="row">
                                            <div class="col-5">
                                                <img src="/storage/courses/{{ $course->photo }}" width="100%"
                                                    class="rounded-4">
                                            </div>
                                            <div class="col">
                                                <h5>{{ $course->title }}</h5>
                                                <small class="text-muted">{{ $course->description }}</small>
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
