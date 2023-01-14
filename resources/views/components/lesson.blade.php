<a href="{{ route('learn.lessons.show', [$course, $lesson]) }}" class="text-decoration-none text-dark h-100" role="button">
    <div class="card border-0 rounded-3 bg-light">
        <div class="card-body d-flex flex-row justify-content-between gap-1">
            <div class="d-flex flex-row align-items-center gap-4">
                <div class="row">
                    <h4 class="text-center">{{ $index }}</h4>
                </div>
                <div class="row">
                    <h5>{{ $lesson->title }}</h5>
                    <div class="text-muted">{{ $lesson->subtitle }}</div>
                </div>
            </div>
            @if (1)
                <div class="d-flex align-items-center me-2">
                    <i class="bi bi-check-circle-fill fs-1 text-primary"></i>
                </div>
            @endif
        </div>
    </div>
</a>
