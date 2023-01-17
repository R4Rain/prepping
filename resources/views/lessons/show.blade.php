<x-app title="{!! $lesson->title !!}">
    <div class="container-lg p-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="card-body p-5">
                        <div class="row g-5 mb-4">
                            <div class="col">
                                <h2>
                                    <a href="{{ route('learn.show', $course) }}" class="text-dark">
                                        <i class="bi bi-arrow-left me-2"></i></a>{{ $lesson->title }}
                                </h2>
                                <small>
                                    Published on {{ date('F j, Y', strtotime($lesson->created_at)) }}
                                </small>
                                <div class="my-2 text-muted">
                                    {!! $lesson->subtitle !!}
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="row g-2">
                                    @if (auth()->user()->role == 'ADMIN')
                                        <div class="col">
                                            <a href="{{ route('courseslessons.edit', [$course, $lesson]) }}"
                                                class="btn btn-primary rounded-3 w-100">
                                                <i class="bi bi-pencil me-1"></i> Edit
                                            </a>
                                        </div>
                                        <div class="col">
                                            <form method="POST"
                                                action="{{ route('courseslessons.destroy', [$course, $lesson]) }}">
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
                        <hr class="my-4" style="border-style: dashed">
                        <h4 class="mb-4">Content</h4>
                        <div class="mb-5">
                            {!! $lesson->content !!}
                        </div>
                        <hr class="my-4" style="border-style: dashed">
                        <div class="d-flex flex-row justify-content-between">
                            <div class="col-2 d-flex justify-content-start">
                                @if ($prev_exists)
                                    <form method="POST" class="w-100"
                                        action="{{ route('learn.lessons.previous', [$course, $lesson]) }}">
                                        @csrf
                                        <button class="btn btn-primary rounded-3 w-100" type="submit">
                                            <i class="bi bi-caret-left-fill text-white me-1"></i> Previous
                                        </button>
                                    </form>
                                @endif
                            </div>
                            <div class="col-2 d-flex justify-content-end">
                                @if ($next_exists)
                                    <form method="POST" class="w-100"
                                        action="{{ route('learn.lessons.next', [$course, $lesson]) }}">
                                        @csrf
                                        <button class="btn btn-primary rounded-3 w-100" type="submit">
                                            Next <i class="bi bi-caret-right-fill text-white ms-1"></i>
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
