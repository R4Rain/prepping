<x-app title="{!! $recipe->name !!}">
    <div class="container-lg p-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="card-body p-5">
                        <div class="row g-5 mb-4">
                            <div class="col">
                                <h2>{{ $recipe->name }}</h2>
                                <small>
                                    Recipe by <b>{{ $recipe->user->name }}</b> | Published on
                                    {{ date('F j, Y', strtotime($recipe->created_at)) }}
                                </small>
                                <div class="my-2">
                                    @foreach ($recipe->categories as $category)
                                        <span class="badge bg-secondary rounded-pill">{{ $category->name }}</span>
                                    @endforeach
                                </div>

                                <div class="my-4 text-muted">
                                    {!! $recipe->description !!}
                                </div>

                                <div class="card border-0 bg-light rounded-3">
                                    <div class="card-body d-flex justify-content-center align-items-center gap-5">
                                        <div>
                                            <i class="bi bi-star-fill text-primary me-1"></i>
                                            @if ($recipe->ratings->count() > 0)
                                                {{ (float) $recipe->ratings->sum('value') / (float) $recipe->ratings->count() }}
                                            @else
                                                0
                                            @endif
                                        </div>
                                        <div>
                                            <i class="bi bi-clock text-primary me-1"></i>
                                            <span class="me-2">
                                                <span class="text-muted">Prep: </span>{{ $recipe->prep_time }}mins
                                            </span>
                                            <span>
                                                <span class="text-muted">Cook: </span>{{ $recipe->cook_time }}mins
                                            </span>
                                        </div>
                                        <div>
                                            <i class="bi bi-cup-hot text-primary me-1"></i>
                                            {{ $recipe->servings }} servings
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <img src="/storage/recipes/{{ $recipe->photo }}" width="100%" class="rounded-4 mb-3">
                                <div class="row g-2">
                                    @if ($recipe->user->id != auth()->user()->id)
                                        <div class="col">
                                            <button type="button" class="btn btn-primary rounded-3 w-100"
                                                data-bs-toggle="modal" data-bs-target="#collection">
                                                <i class="bi bi-bookmark me-1"></i> Save
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-outline-primary rounded-3 w-100"
                                                data-bs-toggle="modal" data-bs-target="#rate">
                                                <i class="bi bi-star me-1"></i> @if ($user_rating) Edit Rating @else Rate @endif
                                            </button>
                                        </div>
                                    @else
                                        <div class="col">
                                            <a href="{{ route('recipes.edit', $recipe) }}"
                                                class="btn btn-primary rounded-3 w-100">
                                                <i class="bi bi-pencil me-1"></i> Edit
                                            </a>
                                        </div>
                                        <div class="col">
                                            <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#delete{{ $recipe->id }}"
                                                class="btn btn-outline-primary rounded-3 w-100">
                                                <i class="bi bi-trash3 me-1"></i> Delete
                                            </button>
                                        </div>

                                        <x-delete :model='$recipe' name='recipes'></x-delete>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <hr class="my-5" style="border-style: dashed">

                        <h4 class="mb-4">Ingredients</h4>
                        <div class="mb-5">
                            {!! $recipe->ingredients !!}
                        </div>

                        <hr class="my-5" style="border-style: dashed">

                        <h4 class="mb-4">Directions</h4>
                        <div class="mb-5">
                            {!! $recipe->instructions !!}
                        </div>

                        <hr class="my-5" style="border-style: dashed">

                        <h4 class="mb-4">Discussion</h4>
                        <form method="POST" action="{{ route('comments.store') }}">
                            @csrf

                            <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">

                            <div class="row g-3 mb-4">
                                <div class="col">
                                    <div class="form-floating">
                                        <textarea class="form-control rounded-3" id="comment" name="comment" required>{{ old('comment') }}</textarea>
                                        <label for="comment">Add a comment...</label>
                                    </div>

                                    @error('comment')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-2">
                                    <button type="submit" class="btn btn-primary rounded-3 w-100">Comment</button>
                                </div>
                            </div>
                        </form>

                        @forelse ($recipe->comments as $comment)
                            <div class="card border-0 bg-light rounded-4 mb-3">
                                <div class="card-body">
                                    <small class="fw-bold">{{ $comment->user->name }}</small>
                                    <div class="mb-2">{{ $comment->content }}</div>

                                    <small class="text-muted" style="font-size: 13px">
                                        {{ $comment->getCreatedTime($comment->created_at) }}
                                    </small>
                                    <button type="button" id="btnCreateReply{{ $comment->id }}"
                                        class="btn btn-primary-light btn-sm rounded-pill mx-2" style="font-size: 13px">
                                        Reply
                                    </button>
                                    @if ($comment->replies->count() > 0)
                                        <button type="button" id="btnShowReply{{ $comment->id }}"
                                            class="btn btn-primary-light btn-sm rounded-pill" style="font-size: 13px">
                                            {{ $comment->replies->count() }}
                                            {{ $comment->replies->count() > 1 ? 'replies' : 'reply' }}
                                        </button>
                                    @endif
                                </div>
                            </div>

                            <div id="showReply{{ $comment->id }}" class="row mb-3" style="display: none">
                                @foreach ($comment->replies as $reply)
                                    <div class="col offset-1">
                                        <div class="card border-0 bg-light rounded-4 mb-3">
                                            <div class="card-body">
                                                <small class="fw-bold">{{ $reply->user->name }}</small>
                                                <div class="mb-2">{{ $reply->content }}</div>

                                                <small class="text-muted" style="font-size: 13px">
                                                    {{ $reply->getCreatedTime($reply->created_at) }}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div id="createReply{{ $comment->id }}" class="row mb-3" style="display: none">
                                <form method="POST" action="{{ route('replies.store') }}" class="col offset-1">
                                    @csrf

                                    <input type="hidden" name="comment_id" value="{{ $comment->id }}">

                                    <div class="row g-3">
                                        <div class="col">
                                            <div class="form-floating">
                                                <textarea class="form-control rounded-3" id="reply{{ $comment->id }}" name="reply" required>{{ old('reply') }}</textarea>
                                                <label for="reply{{ $comment->id }}">Add a reply...</label>
                                            </div>

                                            @error('reply')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-secondary rounded-3 w-100" type="submit">
                                                Reply
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <script>
                                $(document).ready(function() {
                                    $('#btnCreateReply{{ $comment->id }}').on('click', function() {
                                        $('#createReply{{ $comment->id }}').toggle()
                                    })

                                    $('#btnShowReply{{ $comment->id }}').on('click', function() {
                                        $('#showReply{{ $comment->id }}').toggle()
                                    })
                                })
                            </script>
                        @empty
                            <div class="card border-0 bg-light rounded-4 mb-4">
                                <div class="card-body p-5">
                                    <h5 class="text-center text-muted">0 comments</h5>
                                </div>
                            </div>
                        @endforelse

                        @if (auth()->check())
                            <x-collection :recipe='$recipe'></x-collection>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="rate" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-body p-5">
                    @if ($user_rating == null)
                        <div class="mb-4">
                            <h4 class="text-center">Give Rating</h4>
                        </div>
                        <form method="POST" action="{{ route('ratings.store') }}">
                            @csrf
                            <input type="hidden" value="{{ $recipe->id }}" name="recipe_id">
                            <div class="mb-3">
                                <button id="rate-1" type="button" class="px-0 py-0 border-0 bg-transparent text-secondary" value="1"><i class="bi bi-star-fill"></i></button>
                                <button id="rate-2" type="button" class="px-0 py-0 border-0 bg-transparent text-secondary" value="2"><i class="bi bi-star-fill"></i></button>
                                <button id="rate-3" type="button" class="px-0 py-0 border-0 bg-transparent text-secondary" value="3"><i class="bi bi-star-fill"></i></button>
                                <button id="rate-4" type="button" class="px-0 py-0 border-0 bg-transparent text-secondary" value="4"><i class="bi bi-star-fill"></i></button>
                                <button id="rate-5" type="button" class="px-0 py-0 border-0 bg-transparent text-secondary" value="5"><i class="bi bi-star-fill"></i></button>
                                <span id="rating-value" class="text-muted ms-1">0</span>
                                <input type="text" value="0" id="input-rating" name="value" hidden>
                            </div>
                            <button type="submit" class="btn btn-primary rounded-3">
                                Confirm
                            </button>
                        </form>
                    @else
                        <div class="mb-4">
                            <h4 class="text-center">Update Rating</h4>
                        </div>
                        <form method="POST" action="{{ route('ratings.update', $user_rating) }}">
                            @csrf
                            <input type="hidden" value="{{ $recipe->id }}" name="recipe_id">
                            <div>Current rating: {{ $user_rating->value }}</div>
                            <div class="mb-3">
                                <button id="rate-1" type="button" class="px-0 py-0 border-0 bg-transparent text-secondary" value="1"><i class="bi bi-star-fill"></i></button>
                                <button id="rate-2" type="button" class="px-0 py-0 border-0 bg-transparent text-secondary" value="2"><i class="bi bi-star-fill"></i></button>
                                <button id="rate-3" type="button" class="px-0 py-0 border-0 bg-transparent text-secondary" value="3"><i class="bi bi-star-fill"></i></button>
                                <button id="rate-4" type="button" class="px-0 py-0 border-0 bg-transparent text-secondary" value="4"><i class="bi bi-star-fill"></i></button>
                                <button id="rate-5" type="button" class="px-0 py-0 border-0 bg-transparent text-secondary" value="5"><i class="bi bi-star-fill"></i></button>
                                <span id="rating-value" class="text-muted ms-1">0</span>
                                <input type="text" value="0" id="input-rating" name="value" hidden>
                            </div>
                            @method('put')
                            <button type="submit" class="btn btn-primary rounded-3">
                                Confirm
                            </button>
                            <a class="btn btn-outline-primary rounded-3" onclick="event.preventDefault();document.getElementById('delete-rating').submit();">
                                <i class="bi bi-trash3 me-1"></i> Delete
                            </a>
                        </form>
                        <form id='delete-rating' method="POST" action="{{ route('ratings.destroy', $user_rating) }}">
                            @csrf
                            @method('delete')
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script>
        // Global variable
        const MAX_STARS = 5;
        const CURR_STYLE = "px-0 py-0 border-0 bg-transparent";
        var ratings = [];

        function changeStar(index){
            for(var i = 1;i <= MAX_STARS;i++){
                if(i <= index) ratings[i-1].className = CURR_STYLE + " text-primary";
                else ratings[i-1].className = CURR_STYLE + " text-secondary";
            }
        }

        function handleRate(e){
            var index = e.currentTarget.value;
            changeStar(index);
            document.getElementById('input-rating').value = index;
            document.getElementById('rating-value').innerHTML = index;
        }

        document.addEventListener('DOMContentLoaded', function () {
            for(var i = 1;i <= MAX_STARS;i++){
                ratings.push(document.getElementById('rate-' + i));
                if(ratings[i-1]){
                    ratings[i-1].addEventListener('click', handleRate);
                }
            }
            var el = document.getElementById('input-rating');
            if(el){
                changeStar(el.value);
            }
        });
    </script>    
</x-app>