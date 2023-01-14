<a href="{{ route('learn.show', $course) }}" class="text-decoration-none text-dark h-100" role="button">
    <img src="/storage/courses/{{ $course->photo }}" class="card-img-top rounded-3 mb-3">
    <h5 class="mb-0">{{ $course->title }}</h5>
</a>