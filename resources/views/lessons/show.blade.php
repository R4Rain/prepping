<x-app title="{!! $lesson->title !!}">
    <div class="container-lg p-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="card-body p-5">
                        <div class="row g-5 mb-4">
                            <div class="col">
                                <h2>
                                    <a href="{{ url()->previous() }}" class="text-dark">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
