<x-app title="Manage Courses">
    <x-navbar-admin></x-navbar-admin>

    <div class="container-lg p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-5">
                        <div class="d-flex justify-content-between align-items-start mb-5">
                            <h3 class="m-0">Manage courses</h3>
                            <a href="{{ route('courses.create') }}" class="btn btn-primary rounded-3">Add course</a>
                        </div>

                        @forelse ($courses as $course)
                            <div class="mb-3">
                                <a href="{{ route('courses.edit', $course) }}"
                                    class="text-decoration-none text-dark h-100" role="button">
                                    <div class="row">
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
</x-app>
